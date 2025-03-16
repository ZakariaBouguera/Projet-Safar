drop database if exists Safar ;
create database Safar ;

use Safar ;

create Table client (
	id  int ,
	nom varchar (50) ,
    prenom varchar (50),
    age int,
    email varchar(200),
    tel int,
	primary key ( id )
);

create Table responsable (
	matricule  int ,
    poste varchar(50),
	nom varchar (50) ,
    prenom varchar (50),
    email varchar(200),
    tel int,
	primary key ( matricule )
);

create Table hotel (
    id_hotel int,
    nom varchar (50),
    adresse varchar (200),
    primary key (id_hotel)
);

create Table voyages (
    id_voyage int,
    ville_depart varchar (100),
    ville_arriver varchar(100),
    tarif varchar (20),
    num_hotel int,
    num_responsable int,
    foreign key (num_hotel) references hotel(id_hotel),
    foreign key (num_responsable) references responsable(matricule),
    primary key  (id_voyage) 
);


create Table Reserver (
    num_client int,
    num_voyage int,
    date_reservation varchar (50),
    date_annulation varchar (50),
    foreign key (num_client) references client(id),
    foreign key (num_voyage) references voyages(id_voyage),
    primary key (num_client, num_voyage)
);

