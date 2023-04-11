-- creación de tabla roles
CREATE table roles
(
    idRol tinyint unsigned auto_increment not null primary key,
    rol varchar(30) unique not null
);


-- creación de tabla usuarios
create table usuarios
(
    idUsuario smallint unsigned auto_increment not null primary key,
    nombre varchar(45) not null,
    apellido varchar(45) not null,
    email varchar(45) unique not null,
    clave varchar(76) not null,
    idRol tinyint unsigned not null default '0',
        constraint usuarios_roles
            FOREIGN KEY (idRol)
                REFERENCES roles (idRol),
    fechaAlta timestamp not null default now()
);








