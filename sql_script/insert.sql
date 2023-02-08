create database takalo;
create table categorie(
    idCategorie int AUTO_INCREMENT PRIMARY KEY,
    intitule VARCHAR(200)
);

create table utilisateur(
    idUser int AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(200),
    prenom VARCHAR(200),
    email VARCHAR(200),
    mdp VARCHAR(200),
    dateNaissance date
);


create table objet(
    idObjet int AUTO_INCREMENT PRIMARY KEY,
    idUser int NOT NULL REFERENCES utilisateur(idUser),
    nom VARCHAR(200)
);

create table photo (
    paths VARCHAR(200),
    idObjet int NOT NULL REFERENCES objet(idObjet)
);


create table echange
(
    idEchange   int auto_increment
        primary key,
    idUser1     int  not null,
    idUser2     int  not null,
    etat        int  not null,
    dateEchange date null,
    idProduit1  int  null,
    idProduit2  int  null,
    constraint echange_objet__fk
        foreign key (idProduit1) references objet (idObjet),
    constraint echange_objet__fk_2
        foreign key (idProduit2) references objet (idObjet)
);

create or replace view user_post as
select photo.paths,o.nom,idUser from photo
join objet o on photo.idObjet = o.idObjet
where o.idUser;


insert into utilisateur VALUES(null,'Mirindra','Raza','abc@gmail.com','1234','2022-01-04');

insert into categorie VALUES(null,'decoration interieur');

insert into objet VALUES(NULL,1,'Plant pot');

insert into photo VALUES('plant-pot.jpg',1);
insert into photo VALUES('minimalistic-pot.jpg',1); 

