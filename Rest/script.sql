-- Creacion de la base de datos.

create database project;

-- Creacion de la tabla.

create table vto(
Cedula varchar(5) primary key,
EjercicioFiscal int,
NombreObraPublica varchar(120),
SectorInversion varchar(120),
Etapa varchar(30),
InstanciaEjecutora varchar(120),
FondoPrograma varchar(120),
TipoAdjudicacion varchar(120),
Municipio varchar(120),
Localidad varchar(30),
Colonia varchar(120),
Calle varchar(120),
ModalidadEjecucion varchar(30),
Contratista varchar(120),
NoContrato varchar(120),
FechaInicioContrato date,
FechaFinContrato date,
InversionContratada double,
Residente varchar(120),
Latitud double,
Longitud double,
PorcentajeAvance varchar(30),
Supervisor varchar(30)
);
