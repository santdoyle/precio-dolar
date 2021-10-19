CREATE DATABASE comprarDolares;



CREATE TABLE seo(
	id int(25) auto_increment not null,
	titulo varchar(125) not null,
	descripcion varchar(255) not null,
	canonical varchar(125) not null,
CONSTRAINT pk_seo PRIMARY KEY (id)
);


CREATE TABLE historico(
	id int(25) auto_increment not null,
	id_dolar int(25) not null,
	compra int(125) not null,
	venta int(125) not null,
	fecha date,
CONSTRAINT pk_historico PRIMARY KEY (id),
CONSTRAINT fk_id_dolar FOREIGN KEY(id_dolar) REFERENCES seo(id)
);

INSERT INTO historico VALUES(
	null,
	 '2',
	  '77.500',
	   '83.500',
	    '2020-10-26'
	    );

SELECT s.id, h.* FROM seo s, historico h WHERE s.id = h.id_dolar GROUP BY id;

INSERT INTO seo VALUES(null, 'Precio Dolar Contado Con Liqui Hoy: Cotización y Vigencia - 2020', '¿Cuál es el dolar contado con liquidación? cómo se compra y cuál es su valor actual.', 'precio/ccl', 'ccl')