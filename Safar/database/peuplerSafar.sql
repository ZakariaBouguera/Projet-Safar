use Safar;

insert into client (id, nom, prenom, age, email, tel) values
(1, "MARWAN", "Matheo", 25, "sio@gmail.com", 0650);

insert into responsable(matricule, poste, nom, prenom, email, tel) values
(1, "patron", "BOUGUERA", "Zakaria", "zakaria.sio@safar.fr", 0749716116 ),
(2, "patron", "CHEBAB", "Hakim", "hakim.sio@safar.fr", 0654697116);

insert into hotel (id_hotel, nom, adresse) values
(10, "Hilton", "rue de Paris"),
(11, "F1", "rue de Alger"),
(12, "Victoria Place", "rue Blaise Desgoffe");

insert into voyages (id_voyage, ville_arriver, ville_depart, tarif, num_hotel, num_responsable) values
(100,"Paris", "Alger","225€",11,1),
(101, "Paris", "Pukhet", "780€",12,2),
(102, "Marseille", "Paris", "50€", 10, 2);

insert into Reserver ( num_client, num_voyage, date_reservation, date_annulation) values 
(1, 100, "2025-01-25", "2025-01-26"),
(1, 101, "2025-01-25", null );
