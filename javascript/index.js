function ePalavraPalindroma(palavra) {
  palavra = palavra.toLowerCase();

  let arrayPlavra = palavra.split("");
  let novaPalavra = "";
  let ePalavraPalindroma = false;

  for (let i = arrayPlavra.length - 1; i >= 0; i--) {
    novaPalavra = `${novaPalavra}${arrayPlavra[i]}`;

    if (palavra == novaPalavra) ePalavraPalindroma = true;
  }

  console.log("palavra", palavra);
  console.log("novaPalavra", novaPalavra);
  return ePalavraPalindroma;
}

let palavra = "Reviver";
let palavraPalindroma = ePalavraPalindroma(palavra);
if (palavraPalindroma) {
  console.log(`A palavra ${palavra} é uma palavra palindromo!!`);
} else {
  console.log(`A palavra ${palavra} não é uma palavra palindromo.`);
}
