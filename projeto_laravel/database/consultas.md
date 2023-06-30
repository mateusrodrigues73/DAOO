
# Consultas ao banco

Descrição e código das principais consultas ao banco de dados.






## Lista de consultas

Buscar todos os produtos de um usuário específico:

`Usuario::where('id', 1)->with('produtos')->get()`


Buscar produtos dentre de uma faixa de valores organizados por ordem de preço, trazendo também suas imagens:

`Produto::whereBetween('preco', [500, 2000])->orderBy('preco', 'desc')->with('produtoImagem')->get()`
  

Buscar produtos dentre de uma determinada categoria organizados por ordem de preço, trazendo também suas imagens:

`Produto::where('categoria', 'teclado')->orderBy('preco', 'desc')->with('produtoImagem')->get()`


Buscar as imagens dos produtos de um usuário:

`Usuario::where('id', 1)->with('produtoImagens')->get()`




