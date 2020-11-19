CREATE TABLE usuarios(
     id_usuario INT AUTO_INCREMENT PRIMARY kEY, 
     nombre_usuario varchar(40), apellido varchar(40), 
     numero_identificacion varchar(40), 
     direccion varchar(40), 
     email varchar(40), 
     telefono varchar(30), 
     foto varchar(40) 
     )ENGINE=INNODB;

     CREATE TABLE categorias(
         id_categoria INT AUTO_INCREMENT PRIMARY kEY, 
         nombre_categoria varchar(40),
         descripcion_categoria varchar(100)
     )ENGINE=INNODB;
     CREATE TABLE administrador(
          id_adminsitrador INT AUTO_INCREMENT PRIMARY kEY, 
     nombre_administrador varchar(40), apellido varchar(40), 
     numero_identificacion varchar(40), 
     direccion varchar(40), 
     email varchar(40), 
     telefono varchar(30), 
     foto varchar(40) 
     )ENGINE=INNODB;

     CREATE TABLE empresas(
         id_empresa INT AUTO_INCREMENT PRIMARY kEY,
         nombre_empresa VARCHAR (50),
         nit VARCHAR (50),
         direccion varchar(50),
         logo VARCHAR(50),
         id_categorias INT,
         CONSTRAINT fk_empresas_categoria FOREIGN KEY (id_categorias) REFERENCES categorias(id_categoria)
     )ENGINE=INNODB;

     CREATE TABLE productos(
         id_producto INT AUTO_INCREMENT PRIMARY kEY,
         descripcion VARCHAR (100),
         cantidad INT,
         ciudades_disponibles VARCHAR (40),
         id_categoria INT,
         precio INT (100),
         imagen VARCHAR(100),
         id_vendedor INT,
         id_empresa INT,
         CONSTRAINT fk_productos_categoria FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria),
         CONSTRAINT fk_productos_usuarios FOREIGN KEY (id_vendedor) REFERENCES usuarios(id_usuario),
     )ENGINE=INNDOB;


    CREATE TABLE bolsa_productos(
        id_bolsa INT AUTO_INCREMENT PRIMARY kEY,
        id_producto INT,
        id_usuario INT,
        CONSTRAINT fk_bolsa_producto FOREIGN KEY (id_producto) REFERENCES productos(id_producto),
        CONSTRAINT fk_bolsa_usuario  FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
    )ENGINE=INNODB;

    CREATE TABLE chat(
    id_chat INT AUTO_INCREMENT PRIMARY kEY, 
    emisor INT,
    receptor INT,
    imagen VARCHAR(100),
     CONSTRAINT fk_chat_emisor_clipro  FOREIGN KEY (emisor) REFERENCES cli_pro(id_cli_pro),
     CONSTRAINT fk_chat_receptor_clipro  FOREIGN KEY (receptor) REFERENCES cli_pro(id_cli_pro)
    )Engine=INNODB;



    CREATE TABLE quejas(
        id_queja INT AUTO_INCREMENT PRIMARY kEY, 
        id_persona INT,
        queja VARCHAR(255),
        fecha DATETIME,
        imagen VARCHAR(100),
        CONSTRAINT fk_quejas_clipro FOREIGN KEY (id_persona) REFERENCES cli_pro(id_cli_pro)
    )ENGINE=INNODB;

    CREATE TABLE mis_compras(
        id_compra INT AUTO_INCREMENT PRIMARY kEY, 
        id_comprador INT,
        id_producto INT,
         CONSTRAINT fk_compras_clipro  FOREIGN KEY (id_comprador) REFERENCES cli_pro(id_cli_pro),
         CONSTRAINT fk_compras_producto FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
    )ENGINE=INNODB;

    CREATE TABLE pedidos(
        id_pedido INT AUTO_INCREMENT PRIMARY kEY,
        id_producto INT,
        id_cliente INT,
        estado VARCHAR(30),
         CONSTRAINT fk_pedidos_clipro  FOREIGN KEY (id_cliente) REFERENCES cli_pro(id_cli_pro),
         CONSTRAINT fk_pedidos_producto FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
    )ENGINE=INNODB;

    CREATE TABLE ingresos(
    id_ingreso INT AUTO_INCREMENT PRIMARY kEY,
    hora time,
    fecha date,
    id_usuario INT,
     CONSTRAINT fk_ingresos_clipro  FOREIGN KEY (id_usuario) REFERENCES cli_pro(id_cli_pro)
    )ENGINE=INNODB;



