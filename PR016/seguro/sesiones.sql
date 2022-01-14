create database if not exists sesiones2;
use sesiones2;


create table perfil (
	codigo char(5) primary key,
	descripcion varchar(30)
) engine=innodb;

create table usuarios (
	usuario char(20) primary key,
	clave char(40) not null,
	correo varchar(75) not null,
	fechaNac date not null,
	perfil char(5) not null,
	index (perfil),
	foreign key (perfil) references perfil (codigo)
) engine=innodb;

create table paginas (
	codigo int(5) primary key,
	descripcion varchar(50),
	url varchar(75) not null
) engine=innodb;

create table accede (
	codigoPerfil char(5) not null,
	codigoPagina char(5) not null,
	index(codigoPerfil),
	index(codigoPagina),
	primary key (codigoPerfil,codigoPagina),
	foreign key (codigoPerfil) references perfil (codigo),
	foreign key (codigoPagina) references paginas (codigo)
) engine=innodb;

create table producto(
	codigoProducto varchar (6) primary key,
	descripcion varchar (50) not null,
	precio float(6) not null,
	stock int(4) not null,
)

create table venta(
	idVenta int(6) auto_increment primary key,
	usuario char(20) not null,
	fechaCompra date not null,
	codigoProducto varchar (6) not null,
	cantidad int(4) not null,
	precioTotal float(9) not null,
	foreign key (codigoProducto) references producto(codigoProducto),
	foreign key (usuario) references usuarios (usuario)
)

create table albaran(
	idAlbaran int (6) auto_increment primary key,
	fechaAlbaran date not null,
	codigoProducto varchar (6) not null,
	cantidad int (4) not null,
	usuario char(20) not null,
	foreign key (codigoProducto) references producto (codigoProducto),
	foreign key (usuario) references usuarios (usuario)
)


insert into perfil (codigo, descripcion) values ('ADM01','Administrador');
insert into perfil (codigo, descripcion) values ('M0001','Moderador');
insert into perfil (codigo, descripcion) values ('P0001','Usuario');

insert into usuarios (usuario,clave, nombre, correo,perfil) values ('u1','356a192b7913b04c54574d18c28d46e6395428ab','aga@correo.es','20-05-1996','ADM01');
insert into usuarios (usuario,clave, nombre, correo,perfil) values ('u2','da4b9237bacccdf19c0760cab7aec4a8359010b0','jgc@correo.es','30-04-1985','M0001');
insert into usuarios (usuario,clave, nombre, correo,perfil) values ('u3','77de68daecd823babbb58edb1c8e14d7106e83bb','lrg@correo.es','10-12-1999','P0001');

insert into paginas (codigo,descripcion,url) values ('PAG01','Página 1','pagina1.php');
insert into paginas (codigo,descripcion,url) values ('PAG02','Página 2','pagina2.php');
insert into paginas (codigo,descripcion,url) values ('PAG03','Página 3','pagina3.php');
insert into paginas (codigo,descripcion,url) values ('PAG04','Página 4','pagina4.php');
insert into paginas (codigo,descripcion,url) values ('PAG05','Página 5','pagina5.php');
insert into paginas (codigo,descripcion,url) values ('PAG06','Página 6','pagina6.php');

insert into accede (codigoPerfil,codigoPagina) values ('ADM01','PAG01');
insert into accede (codigoPerfil,codigoPagina) values ('ADM01','PAG02');
insert into accede (codigoPerfil,codigoPagina) values ('ADM01','PAG03');
insert into accede (codigoPerfil,codigoPagina) values ('ADM01','PAG04');
insert into accede (codigoPerfil,codigoPagina) values ('ADM01','PAG05');
insert into accede (codigoPerfil,codigoPagina) values ('ADM01','PAG06');
insert into accede (codigoPerfil,codigoPagina) values ('M0001','PAG02');
insert into accede (codigoPerfil,codigoPagina) values ('M0001','PAG03');
insert into accede (codigoPerfil,codigoPagina) values ('M0001','PAG05');
insert into accede (codigoPerfil,codigoPagina) values ('P0001','PAG02');
insert into accede (codigoPerfil,codigoPagina) values ('P0001','PAG03');
insert into accede (codigoPerfil,codigoPagina) values ('P0001','PAG04');
insert into accede (codigoPerfil,codigoPagina) values ('P0001','PAG05');
insert into accede (codigoPerfil,codigoPagina) values ('P0001','PAG06');




