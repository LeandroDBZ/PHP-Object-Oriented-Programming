CREATE TABLE produto(id integer PRIMARY KEY NOT NULL,
descricao text, estoque float, preco_custo float,
preco_venda float, codigo_barras text, data_cadastro date,
origem char(1));

CREATE TABLE venda(id integer PRIMARY KEY NOT NULL, 
data_venda date);

CREATE TABLE item_venda(id integer PRIMARY KEY NOT NULL,
id_produto integer references produto(id),
id_venda integer references venda(id), quantidade float,
preco float);