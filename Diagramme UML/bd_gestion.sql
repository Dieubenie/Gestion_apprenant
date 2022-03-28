/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  21/03/2022 13:51:19                      */
/*==============================================================*/


drop table if exists apprenant;

drop table if exists tuteur;

/*==============================================================*/
/* Table : apprenant                                            */
/*==============================================================*/
create table apprenant
(
   code_apprenant       int not null AUTO_INCREMENT,
   code_tuteur          int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   num_tel              int,
   adresse              varchar(254),
   sexe                 varchar(254),
   profession           varchar(254),
   primary key (code_apprenant)
);

/*==============================================================*/
/* Table : tuteur                                               */
/*==============================================================*/
create table tuteur
(
   code_tuteur          int not null AUTO_INCREMENT,
   nom                  varchar(254),
   prenom               varchar(254),
   num_tel              int,
   adresse              varchar(254),
   sexe                 varchar(254),
   profession           varchar(254),
   primary key (code_tuteur)
);

alter table apprenant add constraint FK_Association_1 foreign key (code_tuteur)
      references tuteur (code_tuteur) on delete restrict on update restrict;

