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

INSERT INTO departement (NOM, NUMERO, PHOTO)
VALUES ("Ariège",09,"https://media.routard.com/image/07/3/fb-ariege-2.1563073.jpg"),
("Haute-Garonne",31,"https://storage.lebonguide.com/crop-1600x700/68/63/F5632CB5-249A-4846-9B1F-CB7ACB5E099F.png"),
("Tarn",81,"https://www.gites-de-france.com/sites/default/files/styles/facebook_1200x630/public/gorges_tarn_dt.jpg?itok=DcopDqFk"),
("Gers",32,"https://www.wikicampers.fr/blog/wp-content/uploads/2015/11/En-route-vers-le-Gers-en-camping-car.jpg");

INSERT INTO musee(PHOTO, NOM, ADRESSE, VILLE, CP, TELEPHONE, EMAIL, SITE, DESCRIPTION)
VALUES("https://images.ladepeche.fr/api/v1/images/view/5f6185d23e45460de415761a/large/image.jpg?v=1","Musée des Augustins", "21 rue de Metz", "Toulouse", "31000","05 61 22 21 82","museeaugustins@gmail.com","https://www.augustins.org/fr/", "Le musée des Augustins, fondé en 1793, est l'un des plus anciens musées de France avec le Louvre. Hébergé dans un superbe couvent des XIVe et XVe siècles sur 9 000 m² doté d’un cloître intact et complété d’une nouvelle aile au  XIXe s., c’est le musée des beaux-arts de la ville de Toulouse. Ses collections comptent plus de 4 000 œuvres, peintures et sculptures principalement."),
("https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Mus%C3%A9e_Georges_Labit.jpg/1200px-Mus%C3%A9e_Georges_Labit.jpg","Musée Georges-Labit", "17 rue du Japon", "Toulouse","31400", "05 31 22 99 80","museegeorges-labit@gmail.com","https://musees-occitanie.fr/musees/musee-georges-labit/","Grâce à ce grand voyageur, la ville de Toulouse possède aujourd’hui l’un des plus anciens musées d’art asiatique en France.
Il accueille une des plus belles collections de l’art oriental sur trois millénaires - Inde, Cambodge, Thaïlande, Indonésie, Tibet, Népal, Chine et Japon - ainsi qu'une importante collection égyptienne.
A eux seuls, le pavillon mauresque et son jardin de plantes asiatiques et méditerranéennes (azalées, bambous, fougères arborescentes, palmiers…) proches du canal du midi (classé patrimoine mondial par l'UNESCO), méritent le détour.");

INSERT INTO exposition(NOM, DATE, DESCRIPTION, ID_musee)
VALUES
("Musée des Augustins", "31-02-2021","Le musée des Augustins, fondé en 1793, est l'un des plus anciens musées de France avec le Louvre. Hébergé dans un superbe couvent des XIVe et XVe siècles sur 9 000 m² doté d’un cloître intact et complété d’une nouvelle aile au  XIXe s., c’est le musée des beaux-arts de la ville de Toulouse. Ses collections comptent plus de 4 000 œuvres, peintures et sculptures principalement.",1),
("Musée des Sapins", "31-02-2021", "Le musée des Augustins, fondé en 1793, est l'un des plus anciens musées de France avec le Louvre. Hébergé dans un superbe couvent des XIVe et XVe siècles sur 9 000 m² doté d’un cloître intact et complété d’une nouvelle aile au  XIXe s., c’est le musée des beaux-arts de la ville de Toulouse. Ses collections comptent plus de 4 000 œuvres, peintures et sculptures principalement.",2);
