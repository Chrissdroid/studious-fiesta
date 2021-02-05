use franceamusee;

-- truncate permet de supprimer des données enregistrées dans les tables.
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE  region;
TRUNCATE departement;
TRUNCATE  musee;
TRUNCATE  musee_virtuel;
TRUNCATE  exposition;
SET FOREIGN_KEY_CHECKS = 1;

-- Ajouter des données à une table
INSERT INTO region (NOM, PHOTO)
VALUES ("Auvergne-Rhône-Alpes","https://cdn.radiofrance.fr/s3/cruiser-production/2019/11/7fb08bd9-f066-4609-a975-3f5c9acd0957/870x489_dji_0072_edited_ok.jpg"),
("Bourgogne-Franche-Comté","https://i-det.unimedias.fr/sites/art-de-vivre/files/styles/large/public/Import/det_pierreclos-02.jpg?auto=compress%2Cformat&crop=faces%2Cedges&cs=srgb&fit=crop&h=600&w=900"),
("Bretagne","http://www.meteofrance.fr/documents/10192/82641007/xIllustration+-+Bretagne.pagespeed.ic.TBmkNsbVwd.webp"),
("Centre-Val de Loire","https://www.val-de-loire-41.com/wp-content/uploads/2018/02/la-loire-bloislaurent-alvarez-adt41-e1517917120224-1600x900.jpg"),
("Corse","https://www.sourcedevasion.com/wp-content/uploads/2018/12/537140.ori_.jpg"),
("Grand Est","https://joven.iberia.com/wp-content/uploads/2018/04/Strasbourg.jpg"),
("Hauts-de-France","https://www.voyageway.com/wp-content/uploads/2020/05/visiter-lille-740x459.jpg"),
("Île-de-France","https://www.pariszigzag.fr/wp-content/uploads/2020/01/louvre-paris-zigzag-scaled-1920x1024.jpg"),
("Normandie","https://i-det.unimedias.fr/sites/art-de-vivre/files/styles/teaser_front/public/Import/det_Normandie938.jpg?auto=compress%2Cformat&crop=faces%2Cedges&cs=srgb&fit=crop&h=410&w=900"),
("Nouvelle-Aquitaine","https://www.leboat.fr/sites/default/files/styles/lbt_imgstyle_gallery_lg/public/images/gallery/nerac_aquitaine_leboat_glg.jpg?itok=-qT8-Knc&timestamp=1524688314"),
("Occitanie","https://www.tourisme-occitanie.com/sites/www.tourisme-occitanie.com/files/styles/sommaire/public/thumbnails/image/grands_sites_1.jpg?itok=RX5pqMvn"),
("Pays de la Loire","https://dynamic-media-cdn.tripadvisor.com/media/photo-o/08/7d/24/45/l-anse-des-fontaines.jpg?w=1000&h=600&s=1"),
("Provence-Alpes-Côte d'Azur","https://static.lexpress.fr/medias_12235/w_2048%2Ch_1146%2Cc_crop%2Cx_0%2Cy_0/w_640%2Ch_360%2Cc_fill%2Cg_north/v1591176088/cassis-region-provence-alpes-cote-d-azur-calanques_6264338.jpg");

INSERT INTO departement (NOM, NUMERO, PHOTO, ID_region)
VALUES ("Ariège",09,"https://media.routard.com/image/07/3/fb-ariege-2.1563073.jpg",11),
("Haute-Garonne",31,"https://storage.lebonguide.com/crop-1600x700/68/63/F5632CB5-249A-4846-9B1F-CB7ACB5E099F.png",11),
("Tarn",81,"https://www.gites-de-france.com/sites/default/files/styles/facebook_1200x630/public/gorges_tarn_dt.jpg?itok=DcopDqFk",11),
("Gers",32,"https://www.wikicampers.fr/blog/wp-content/uploads/2015/11/En-route-vers-le-Gers-en-camping-car.jpg",11),
("Hautes-Pyrénées", 65,"https://voyagerenphotos.com/wp-content/uploads/2017/08/col-aspin-1080x640.jpg",11);

INSERT INTO musee(PHOTO, NOM, ADRESSE, VILLE, CP, TELEPHONE, EMAIL, SITE, DESCRIPTION, ID_departement)
VALUES("https://images.ladepeche.fr/api/v1/images/view/5f6185d23e45460de415761a/large/image.jpg?v=1","Musée des Augustins", "21 rue de Metz", "Toulouse", "31000","05 61 22 21 82","museeaugustins@gmail.com","https://www.augustins.org/fr/", "Le musée des Augustins, fondé en 1793, est l'un des plus anciens musées de France avec le Louvre. Hébergé dans un superbe couvent des XIVe et XVe siècles sur 9 000 m² doté d’un cloître intact et complété d’une nouvelle aile au  XIXe s., c’est le musée des beaux-arts de la ville de Toulouse. Ses collections comptent plus de 4 000 œuvres, peintures et sculptures principalement.",2),
("https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Mus%C3%A9e_Georges_Labit.jpg/1200px-Mus%C3%A9e_Georges_Labit.jpg","Musée Georges-Labit", "17 rue du Japon", "Toulouse","31400", "05 31 22 99 80","museegeorges-labit@gmail.com","https://musees-occitanie.fr/musees/musee-georges-labit/","Grâce à ce grand voyageur, la ville de Toulouse possède aujourd’hui l’un des plus anciens musées d’art asiatique en France.
Il accueille une des plus belles collections de l’art oriental sur trois millénaires - Inde, Cambodge, Thaïlande, Indonésie, Tibet, Népal, Chine et Japon - ainsi qu'une importante collection égyptienne.
A eux seuls, le pavillon mauresque et son jardin de plantes asiatiques et méditerranéennes (azalées, bambous, fougères arborescentes, palmiers…) proches du canal du midi (classé patrimoine mondial par l'UNESCO), méritent le détour.",2),
("https://www.musee-massey.com/collections/hussards#PhotoSwipe1612519782940", "LE MUSÉE MASSEY - MUSÉE INTERNATIONAL DES HUSSARDS", "Rue Achille Jubinal", "Tarbes", "65000", "05 62 44 36 95","publics.musees@mairie-tarbes.fr" ,"https://www.musee-massey.com/", "Le musée Massey, label Musée de France est situé au coeur d'un jardin remarquable. Cette ancienne demeure de style mauresque avec une tour d'observation sur les Pyrénées, offre au public un musée moderne d'Art et d'Histoire.",5),
("https://media-cdn.tripadvisor.com/media/photo-s/0c/d3/b7/13/la-sellerie-d-honneur.jpg","LE HARAS DE TARBES","Chemin Mauhourat", "TARBES", "65000", "06 32 44 87 13", "guide.haras@mairie-tarbes.fr", "https://www.tarbes-tourisme.fr/decouvrir/musees/detail/PCUMID065FS0002U/liste/1/le_haras_de_tarbes.html","Si l'histoire de Tarbes nous était contée, elle retracerait pas à pas celle de son Haras : un parc naturel au coeur de la ville, site historique et classé, créé par Napoléon en 1806, berceau de l'anglo-arabe et musée vivant !", 5),
("https://www.museemusee.com/image-resize/crop/musee-fiche/2166-tresor_du_perou22.jpg.html","Musée des Amériques-Auch", "4 place Louis-Blanc", "Auch", "32000","05 62 05 74 79","musee@grand-auch.fr","https://www.ameriques-auch.fr/","Arts du Monde (Beaux-Arts), Antiquité (Histoire / Civilisations), Moyen Âge (Histoire / Civilisations), Peinture (Beaux-Arts), Sculpture (Beaux-Arts), Arts Décoratifs (Beaux-Arts), Art (Ethnologie), Tradition Populaire (Ethnologie)",4),
("https://www.museemusee.com/image-resize/crop/musee-fiche/2173-tresor_222.jpg.html","Musée d'Art Sacré - Trésor de la Cathédrale","Place Salinis","Auch","32000","05 62 68 76 98","","https://www.auch-tourisme.com/patrimoine-culturel/musee-du-tresor-de-la-cathedrale/","Installé au pied de la Tour d'Armagnac (ancienne prison), ce musée d'art sacré, vous permet d'accéder à une partie des cachots, aux salles basses de la chanoinie, ainsi qu'aux vestiges de la cathédrale primitive.
Le Musée du Trésor vous présente plus de 200 objets d'arts religieux : tableaux, sculptures, orfèvrerie, qui sont mis en valeur comme de véritables œuvres d'art, et pas seulement comme des objets de dévotion.",4);



INSERT INTO exposition(NOM, DATE, DESCRIPTION, ID_musee)
VALUES
("Exposition", "31-02-2021","Le musée des Augustins, fondé en 1793, est l'un des plus anciens musées de France avec le Louvre. Hébergé dans un superbe couvent des XIVe et XVe siècles sur 9 000 m² doté d’un cloître intact et complété d’une nouvelle aile au  XIXe s., c’est le musée des beaux-arts de la ville de Toulouse. Ses collections comptent plus de 4 000 œuvres, peintures et sculptures principalement.",1),
("Exposition", "31-02-2021", "Le musée des Augustins, fondé en 1793, est l'un des plus anciens musées de France avec le Louvre. Hébergé dans un superbe couvent des XIVe et XVe siècles sur 9 000 m² doté d’un cloître intact et complété d’une nouvelle aile au  XIXe s., c’est le musée des beaux-arts de la ville de Toulouse. Ses collections comptent plus de 4 000 œuvres, peintures et sculptures principalement.",2);

