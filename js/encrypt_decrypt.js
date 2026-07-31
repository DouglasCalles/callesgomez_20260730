let clave;   // Clave AES
let iv;      // Vector de inicialización
let cifrado; // Texto cifrado

async function generarClave() {
  clave = await window.crypto.subtle.generateKey(
    { name: "AES-GCM", length: 256 },
    true,
    ["encrypt", "decrypt"]
  );
}

async function cifrar(texto) {
  const encoder = new TextEncoder();
  const datos = encoder.encode(texto);

  iv = window.crypto.getRandomValues(new Uint8Array(12));
  const bufferCifrado = await window.crypto.subtle.encrypt(
    { name: "AES-GCM", iv },
    clave,
    datos
  );

  const bytes = new Uint8Array(bufferCifrado);
  return btoa(String.fromCharCode(...bytes));
}

async function descifrar(base64Cifrado) {
  const bytes = Uint8Array.from(atob(base64Cifrado), c => c.charCodeAt(0));
  const bufferDescifrado = await window.crypto.subtle.decrypt(
    { name: "AES-GCM", iv },
    clave,
    bytes
  );

  const decoder = new TextDecoder();
  return decoder.decode(bufferDescifrado);
}


generarClave();

/*
document.getElementById("btnCifrar").addEventListener("click", async () => {
  const texto = document.getElementById("texto").value;
  cifrado = await cifrar(texto);
  document.getElementById("salida").textContent = "Texto cifrado:\n" + cifrado;
});

document.getElementById("btnDescifrar").addEventListener("click", async () => {
  const descifrado = await descifrar(cifrado);
  document.getElementById("salida").textContent += "\n\nTexto descifrado:\n" + descifrado;
});
*/
