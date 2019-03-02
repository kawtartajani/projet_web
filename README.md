# projet_web
gestion des services

Le but de ce projet est de créer un site qui permet la gestion des services des enseignants de l’univer-sité/lycée. Chaque enseignant (décrit dans la table enseignants) a un nombre d’heures à effectuer dans le cadre de ses enseignements. 
Ce nombre est renseigné dans la table etypes. Les enseignements se divisent en modules, renseignés dans la table modules, qui sont groupés en plusieurs catégories (table categories).
Un module a un code, un enseignant responsable et possède plusieurs groupes (CM, TD, TP etc) qui né-cessitent un certain nombre d’heures. 
Les noms des groupes sont renseignés dans la table groupes, tandis que le volume horaire est renseigné dans la table gtypes. 
Les affectation des groupes aux enseignants sont stockés dans la table affectations. Attention, cette affectation peut porter uniquement sur une partie du volume horaire nécessaire pour le groupe, donc un groupe pourrait être affecté à plusieurs enseignants.Finalement, la table users permet de faire le lien entre les utilisateurs du site et les enseignants.Outre la gestion, le site doit également montrer les statistiques : pour chaque enseignant les groupes dans lesquels il intervient (groupés par module), ainsi que le nombre d’heures correspondant. Pour les modules et les groupes il faut afficher les enseignants concernés (avec le nombre d’heures correspondant).Pour le nombre d’heures il faut afficher 2 valeurs : le nbh calculé comme la somme de tous les nbh correspondants, puis eqtd qui est calculé comme la somme pondérée des nbh par le coeff.Il faut également afficher le nombre d’heures non-assuré pour les enseignants, les modules et les groupes.Le système d’information dépend de l’année (scolaire) en cours. C’est pour cela que les tables ensei-gnants,modules et groupes contient le champ annee. Toutes les opérations du site se font par rapport à l’année en cours et qui bien évidemment peut être changée. Il devrait être également possible de copier toute l’information présente sur une année dans l’année en cours.Les utilisateurs qui ont les droits administrateur peuvent effectuer tout changement sur le site. Les utilisateurs ordinaires peuvent uniquement consulter l’information concernant leur affectation.Le site doit permettre d’effectuer les opérations suivantes (pour les administrateurs) qui s’effectuent par rapport à l’année en cours choisie :
— Les opérations CRUD :
— clear : liste, ajout, modification mdp, suppression, modification association enseignant.
— Gestion des enseignants : liste, ajout, modification, suppression.
— Gestion des modules : liste, ajout, modification, suppression.
— Gestion des groupes : liste, ajout, modification, suppression, modification de l’affectation à un module.
— Gestion de la tablegtypes: liste, ajout, modification, suppression (uniquement si le type n’est pas utilisé).
— Affectation d’un groupe à un enseignant (avec le nombre d’heures correspondant). Par défaut,la totalité des heures du module doit être proposée. Suppression de l’affectation et modificationdu nombre d’heures.
— Tableau de bord :
— Pour chaque enseignant : la liste des modules et des groupes affectés (groupage par modules),ainsi que le nombre d’heures correspondant en nbh et eqtd. Afficher également le nombre d’heures qui ne sont pas encore effectuées par l’enseignant.— Pour chaque groupe : la liste des enseignants affectés avec le nombre d’heures correspondant(en nbh et eqtd), ainsi que le nombre d’heures manquantes.
— Pour chaque module : la liste des groupes affichant l’information ci-dessus, ainsi que le nombretotal d’heures manquantes.— Prévoir une page de type tableau de bord qui permettra de retrouver rapidement les enseignants avec un service non-complet et les modules ayant des heures non-affectés.
— Calculer le nombre total des heures affectées et non-affectés.
— Gestion de l’année en cours :
— Permettre le choix de l’année à consulter (par défaut l’année en cours).
— Copier toute l’information d’une année vers l’année en cours (et en modifiant l’année).
— Pour les utilisateurs non-administrateurs on doit pouvoir accéder uniquement aux statistiques del’enseignant correspondant (par année), ainsi qu’au changement du mot de passe.




