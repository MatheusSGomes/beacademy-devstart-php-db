-- criar banco --
CREATE DATABASE db_store;

-- selecionar o banco --
USE db_store;

-- criar tabela de categoria --
CREATE TABLE tb_category (
  id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL,
  description VARCHAR(100) NOT NULL
);

-- insere categorias --
INSERT INTO tb_category (name, description) 
VALUES 
  ('Informática', 'Produtos de informática e acessórios para computador'),
  ('Escritório', 'Canetas, cadernos, folhas, etc'),
  ('Eletrônicos', 'TVs, som portátil, caixas de som, etc');


-- criar tabela de produtos --
CREATE TABLE tb_product (
  id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL,
  description VARCHAR(100) NOT NULL,
  photo VARCHAR(255) NOT NULL, 
  price FLOAT(5,2) NOT NULL,
  category_id INT(11) NOT NULL,
  quantity INT(5) NOT NULL,
  created_at DATETIME NOT NULL
);

-- Exercício: Cadastrar pelo menos 20 produtos (colocar a URL de imagens da internet no campo da foto) --
INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES 
('Teclado', 'Teclado Gamer para jogos', 'https://e-arena.com.br/wp-content/uploads/2019/09/tcmecanico4.jpg', 159.0, 50, '2022-06-15 19:24:00', 1);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES 
('Headset', 'Headset Gamer para jogos', 'https://edifier.com.br/pub/media/catalog/product/h/e/headset-gamer-edifier-gx-hi-res_1.jpg', 379.9, 39, '2022-06-15 19:24:00', 1);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES 
('Mouse', 'Mouse Gamer para jogos', 'https://www.oficinadosbits.com.br/fotos/extragrande/33216fe1/mouse-gamer-redragon-predator-8000dpi-chroma-rgb-9-botoes-m612-rgb.jpg', 79.9, 78, '2022-06-15 19:24:00', 1);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('Mousepad', 'Mousepad para escritórios', 'https://cdn.awsli.com.br/1000x1000/357/357438/produto/47832156/c16bf669c5.jpg', 49.99, 59, '2022-06-15 19:24:00', 1);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('Gabinete', 'Gabinete refrigerado', 'https://images.tcdn.com.br/img/img_prod/740836/gabinete_gamer_concordia_viking_7797_1_ca7d6e2c5728257c395182757a5807e7.jpg', 559.9, 95, '2022-06-15 19:24:00', 1);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('Webcam', 'Webcam full HD', 'https://www.epocaeletro.com.br/wp-content/uploads/webcam-logitech-full-hd-1080p-group-para-video-conferencia.jpg', 189.9, 32, '2022-06-15 19:24:00', 1);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('Marcador', 'Marcador de cadernos', 'https://images.tcdn.com.br/img/img_prod/1042595/marcador_de_pagina_seta_c_mensagens_eagle_155_1_a41ac06d6fa3ad86de349583492ac976_20220103113011.jpg', 9.50, 71, '2022-06-15 19:24:00', 2);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('Etiqueta', 'Etiqueta adesiva colorida', 'https://www.mcpapeis.com.br/img/products/etiqueta-de-preco-60x40mm-c-750-un-mod-09-fitacrel_1_600.jpg', 6.70, 55, '2022-06-15 19:24:00', 2);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('Grampeador', 'Grampeador 2 grampos', 'https://cdnv2.moovin.com.br/marbig/imagens/produtos/det/grampeador-25-folhas-metalico-de-mesa-g104-preto-img-58467.jpg', 15.97, 67, '2022-06-15 19:24:00', 2);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('Fichário', 'Fichário 50 folhas', 'https://www.daclojaonline.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/3/1/3109_fich_rio-el_stico_dac-letter_frente_1.jpg', 29.99, 15, '2022-06-15 19:24:00', 2);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('Caderno', 'Caderno 10 matérias', 'https://www.papelariaartnova.com.br/img/products/caderno-espiral-univ-capa-dura-10-materias-160-fls-zip-01-tilibra_1_2000.jpg', 15.80, 14, '2022-06-15 19:24:00', 2);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('Quadro', 'Quadro branco aluminio', 'https://www.papelariaartnova.com.br/img/products/quadro-branco-100x70-moldura-aluminio-free-9123---stalo_1_650.jpg', 150.99, 25, '2022-06-15 19:24:00', 2);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('Fita dupla', 'Fita dupla adesiva colorida', 'https://s3.amazonaws.com/lepok.w/produtos/produtos/prod/10917.jpg', 7.99, 37, '2022-06-15 19:24:00', 2);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('Microfone', 'Microfone com entrada USB', 'https://d2r9epyceweg5n.cloudfront.net/stores/002/137/719/products/microfone-fifine-k678-1011-9addd35c10be0923bf16509358675943-640-0.jpg', 89.70, 85, '2022-06-15 19:24:00', 1);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('SSD', 'SSD 2tb', 'https://static.nagem.com.br/util/artefatos/produtos/m/n/796151627653543/462110_1.jpg', 279.99, 74, '2022-06-15 19:24:00', 3);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('Lâmpada Smart', 'Lâmpada Smart conecta com autofalante', 'https://cdn.shopify.com/s/files/1/0335/2530/1379/products/bulbo_smart_000_2_1024x1024_e52aaca9-3f5a-4388-abb3-391a5ef43e61_1200x1200.jpg', 87.00, 65, '2022-06-15 19:24:00', 3);


INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('Tablet', 'Tablet 11 polegadas ultrafino', 'https://i.blogs.es/d6b6d1/c0153.mp4.00_21_46_12.imagen-fija001/840_560.jpg', 890.80, 49, '2022-06-15 19:24:00', 3);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('Fone de ouvido', 'Fone de ouvido Bluetooth com carregador', 'https://www.jbl.com.br/on/demandware.static/-/Sites-JB-BR-Library/default/dw1a812092/glp/fones-de-ouvido/images/cat-02.png', 89.90, 82, '2022-06-15 19:24:00', 3);

-- ERRO -- OUT OF RANGE

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('Monitor', 'Monitor 21 polegadas', 'https://images.tcdn.com.br/img/img_prod/664937/monitor_dell_professional_led_ips_21_5_p2219h_preto_hdmi_4847_1_20200203184516.jpg', 950.49, 96, '2022-06-15 19:24:00', 3);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('Notebook', 'Notebook 16gb de memória RAM, 1tb de HD, core i7', 'https://www.saldaodainformatica.com.br/9614-medium_default/notebook-lenovo-ideapad-s145-81s9000rbr-prata-intel-core-i5-8265u-mx110-ram-8gb-ssd-256gb-tela-156-windows-10.jpg', 990.99, 39, '2022-06-15 19:24:00', 3);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('Smart TV', 'TV Smart 42 polegadas', 'https://www.lg.com/br/images/tv/md07530881/gallery/d-5.jpg', 960.99, 406, '2022-06-15 19:24:00', 3);

INSERT INTO tb_product (name, description, photo, price, quantity, created_at, category_id) 
VALUES
('SoundBar', 'SoundBar Bluetooth', 'https://lojaibyte.vteximg.com.br/arquivos/ids/191227-1200-1200/soundbar-jbl-sb160-com-2-1-canais-bluetooth-e-subwoofer-sem-fio-220w-42351-1.png', 980.90, 93, '2022-06-15 19:24:00', 3);