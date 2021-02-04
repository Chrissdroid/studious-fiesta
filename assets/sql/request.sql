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
("Provence-Alpes-Côte d'Azur","https://www.lagrande-verriere.com/wp-content/uploads/2018/11/luberon-provence-idees-sorties-villages.jpg");

