// Container dans lequel se trouve la structure du menu que l'on veux intègrer.
const header = document.getElementById('menu_site');

/**----------------------------------------------------------------------------
 * 
 *                      Création de la structure
 * 
 ----------------------------------------------------------------------------*/


// Création de l'élément "ul" et définition de sa id à "nav"
const first_ul = document.createElement('ul');
first_ul.setAttribute('id', "nav");






/*----------------------------------------------------------------------------
   


*                        Création de la Structure ACCUEIL



 ----------------------------------------------------------------------------*/
 /* ------------------    Création des Listes Primaire      ----------------- */
 const li_ACCUEIL = document.createElement('li');
 li_ACCUEIL.setAttribute('class', "parent");
 

/* ------------------    Création des Lien Primaire      ----------------- */
const a_ACCUEIL = document.createElement('a');
a_ACCUEIL.setAttribute('href', '#');
a_ACCUEIL.textContent = 'ACCUEIL';









/*----------------------------------------------------------------------------
   


*                        Création de la Structure HTML



 ----------------------------------------------------------------------------*/

//Création de la liste primaire
const li_HTML = document.createElement('li');

//Création du lien primaire
const a_HTML = document.createElement('a');
 a_HTML.setAttribute('href', '#');
 a_HTML.textContent = 'HTML';

//Création de la liste UL
const ul_HTML = document.createElement('ul');



/*----------------------------------------------------------------------------
 *                      Création des Listes Secondaire HTML
 ----------------------------------------------------------------------------*/
 const li_HTML_1 = document.createElement('li');
 const li_HTML_2 = document.createElement('li');
 const li_HTML_3 = document.createElement('li');
 const li_HTML_4 = document.createElement('li');
 const li_HTML_5 = document.createElement('li');



/*----------------------------------------------------------------------------
 *                      Création des Liens Secondaire HTML
 ----------------------------------------------------------------------------*/
const a_HTML_1 = document.createElement('a');
 a_HTML_1.setAttribute('href', './HTLM/Base.html');
 a_HTML_1.textContent = 'Bases HTML';

 const a_HTML_2 = document.createElement('a');
 a_HTML_2.setAttribute('href', '#');
 a_HTML_2.textContent = 'Intermédiaire HTML';

 const a_HTML_3 = document.createElement('a');
 a_HTML_3.setAttribute('href', '#');
 a_HTML_3.textContent = 'Formulaires HTML';

 const a_HTML_4 = document.createElement('a');
 a_HTML_4.setAttribute('href', '#');
 a_HTML_4.textContent = 'HTML Sémantique';

 const a_HTML_5 = document.createElement('a');
 a_HTML_5.setAttribute('href', '#');
 a_HTML_5.textContent = "Notions de base sur l'accesibilité";


/*----------------------------------------------------------------------------
 *                      Création des Listes Secondaire HTML
 ----------------------------------------------------------------------------*/
const ul_HTML_1 = document.createElement('ul');
const ul_HTML_2 = document.createElement('ul');
const ul_HTML_3 = document.createElement('ul');
const ul_HTML_4 = document.createElement('ul');
const ul_HTML_5 = document.createElement('ul');

/*----------------------------------------------------------------------------
 *                      Création des Listes tertiaire
 ----------------------------------------------------------------------------*/

 const HTML_ul_1_li_1 = document.createElement('li');
 const HTML_ul_1_li_2 = document.createElement('li');
 const HTML_ul_1_li_3 = document.createElement('li');
 const HTML_ul_1_li_4 = document.createElement('li');


 const HTML_ul_2_li_1 = document.createElement('li');
 const HTML_ul_2_li_2 = document.createElement('li');
 const HTML_ul_2_li_3 = document.createElement('li');
 const HTML_ul_2_li_4 = document.createElement('li');


 const HTML_ul_3_li_1 = document.createElement('li');
 const HTML_ul_3_li_2 = document.createElement('li');


 const HTML_ul_4_li_1 = document.createElement('li');
 const HTML_ul_4_li_2 = document.createElement('li');
 const HTML_ul_4_li_3 = document.createElement('li');


 const HTML_ul_5_li_1 = document.createElement('li');
 const HTML_ul_5_li_2 = document.createElement('li');


 /*----------------------------------------------------------------------------
 *                      Création des Liens Tertiaire HTML
 ----------------------------------------------------------------------------*/
/* ------------------        Bases HTML          ----------------- */

 const HTML_li_1_a_1 = document.createElement('a');
 HTML_li_1_a_1.setAttribute('href', './HTML/Base/HTML_et_Balise.html');
 HTML_li_1_a_1.textContent = "Découvrir le HTML et les balises";
 
 const HTML_li_1_a_2 = document.createElement('a');
 HTML_li_1_a_2.setAttribute('href', '#');
 HTML_li_1_a_2.textContent = "Structuration du texte avec des balises";
 
 const HTML_li_1_a_3 = document.createElement('a');
 HTML_li_1_a_3.setAttribute('href', '#');
 HTML_li_1_a_3.textContent = "Boutons de construction";
 
 const HTML_li_1_a_4 = document.createElement('a');
 HTML_li_1_a_4.setAttribute('href', '#');
 HTML_li_1_a_4.textContent = "Créer des liens";


/* ------------------        Intermédiaire HTML          ----------------- */

 const HTML_li_2_a_1 = document.createElement('a');
 HTML_li_2_a_1.setAttribute('href', '#');
 HTML_li_2_a_1.textContent = "Ajout d'images";

 const HTML_li_2_a_2 = document.createElement('a');
 HTML_li_2_a_2.setAttribute('href', '#');
 HTML_li_2_a_2.textContent = "Collecte d'entrées";

 const HTML_li_2_a_3 = document.createElement('a');
 HTML_li_2_a_3.setAttribute('href', '#');
 HTML_li_2_a_3.textContent = "Regroupement d'éléments";

 const HTML_li_2_a_4 = document.createElement('a');
 HTML_li_2_a_4.setAttribute('href', '#');
 HTML_li_2_a_4.textContent = "Construire des listes";

/* ------------------        Formulaire HTML          ----------------- */

 const HTML_li_3_a_1 = document.createElement('a');
 HTML_li_3_a_1.setAttribute('href', '#');
 HTML_li_3_a_1.textContent = "Créer des formulaires";

 const HTML_li_3_a_2 = document.createElement('a');
 HTML_li_3_a_2.setAttribute('href', '#');
 HTML_li_3_a_2.textContent = "Formulaires avec étiquettes";

 /* ------------------        Sémantique HTML          ----------------- */

 const HTML_li_4_a_1 = document.createElement('a');
 HTML_li_4_a_1.setAttribute('href', '#');
 HTML_li_4_a_1.textContent = "Alternatives sémantiques";

 const HTML_li_4_a_2 = document.createElement('a');
 HTML_li_4_a_2.setAttribute('href', '#');
 HTML_li_4_a_2.textContent = "Structure sémantique des pages";

 const HTML_li_4_a_3 = document.createElement('a');
 HTML_li_4_a_3.setAttribute('href', '#');
 HTML_li_4_a_3.textContent = "Éléments qui changent de look";

 /* ------------------   Notion de base sur l'accessibilité   ----------------- */

 const HTML_li_5_a_1 = document.createElement('a');
 HTML_li_5_a_1.setAttribute('href', '#');
 HTML_li_5_a_1.textContent = "Principes de base de l'accessibilité HTML";

 const HTML_li_5_a_2 = document.createElement('a');
 HTML_li_5_a_2.setAttribute('href', '#');
 HTML_li_5_a_2.textContent = "Accessibilité WAI-ARIA";







/*----------------------------------------------------------------------------
 


*                      Création de la Structure CSS



 ----------------------------------------------------------------------------*/
 /* ------------------    Création des Listes Primaire      ----------------- */
 const li_CSS = document.createElement('li');
 

/* ------------------    Création des Lien Primaire      ----------------- */
const a_CSS = document.createElement('a');
 a_CSS.setAttribute('href', '#');
 a_CSS.textContent = 'CSS';
 
 
/* ------------------    Création des Ul Secondaire      ----------------- */
const ul_CSS = document.createElement('ul');


/* ------------------    Création des Liste Secondaire      ----------------- */
const CSS_li_1 = document.createElement('li');
const CSS_li_2 = document.createElement('li');
const CSS_li_3 = document.createElement('li');
const CSS_li_4 = document.createElement('li');
const CSS_li_5 = document.createElement('li');
const CSS_li_6 = document.createElement('li');
const CSS_li_7 = document.createElement('li');
const CSS_li_8 = document.createElement('li');
const CSS_li_9 = document.createElement('li');


/* ------------------    Création des Lien Secondaire      ----------------- */
const CSS_a_1 = document.createElement('a');
CSS_a_1.setAttribute('href', "#");
CSS_a_1.textContent = "Bases CSS";
const CSS_a_2 = document.createElement('a');
CSS_a_2.setAttribute('href', "#");
CSS_a_2.textContent = "Fonction CSS";
const CSS_a_3 = document.createElement('a');
CSS_a_3.setAttribute('href', "#");
CSS_a_3.textContent = "Classe CSS";
const CSS_a_4 = document.createElement('a');
CSS_a_4.setAttribute('href', "#");
CSS_a_4.textContent = "Fondamentaux des Layouts CSS";
const CSS_a_5 = document.createElement('a');
CSS_a_5.setAttribute('href', "#");
CSS_a_5.textContent = "Bases Flexbox";
const CSS_a_6 = document.createElement('a');
CSS_a_6.setAttribute('href', "#");
CSS_a_6.textContent = "Conteneurs Flexbox";
const CSS_a_7 = document.createElement('a');
CSS_a_7.setAttribute('href', "#");
CSS_a_7.textContent = "Articles Flexbox";
const CSS_a_8 = document.createElement('a');
CSS_a_8.setAttribute('href', "#");
CSS_a_8.textContent = "CSS grid";
const CSS_a_9 = document.createElement('a');
CSS_a_9.setAttribute('href', "#");
CSS_a_9.textContent = "Bootstrap";













/*----------------------------------------------------------------------------
 


*                      Création de la Structure JAVASCRIPT



 ----------------------------------------------------------------------------*/
/* ------------------    Création des Listes Primaire      ----------------- */
 const li_JAVASCRIPT = document.createElement('li');
 

/* ------------------    Création des Lien Primaire      ----------------- */
const a_JAVASCRIPT = document.createElement('a');
a_JAVASCRIPT.setAttribute('href', '#');
a_JAVASCRIPT.textContent = 'JAVASCRIPT';

 
/* ------------------    Création des Ul Secondaire      ----------------- */
const ul_JAVASCRIPT = document.createElement('ul');


/* ------------------    Création des Liste Secondaire     ----------------- */
const JAVASCRIPT_li_1 = document.createElement('li');
const JAVASCRIPT_li_2 = document.createElement('li');
const JAVASCRIPT_li_3 = document.createElement('li');
const JAVASCRIPT_li_4 = document.createElement('li');
const JAVASCRIPT_li_5 = document.createElement('li');
const JAVASCRIPT_li_6 = document.createElement('li');
const JAVASCRIPT_li_7 = document.createElement('li');
const JAVASCRIPT_li_8 = document.createElement('li');
const JAVASCRIPT_li_9 = document.createElement('li');
const JAVASCRIPT_li_10 = document.createElement('li');
const JAVASCRIPT_li_11 = document.createElement('li');
const JAVASCRIPT_li_12 = document.createElement('li');
const JAVASCRIPT_li_13 = document.createElement('li');
const JAVASCRIPT_li_14 = document.createElement('li');
const JAVASCRIPT_li_15 = document.createElement('li');
const JAVASCRIPT_li_16 = document.createElement('li');


/* ------------------    Création des Lien Secondaire      ----------------- */
const JAVASCRIPT_a_1 = document.createElement('a');
JAVASCRIPT_a_1.setAttribute('href', '#');
JAVASCRIPT_a_1.textContent = "Principes de base de JavaScript";

const JAVASCRIPT_a_2 = document.createElement('a');
JAVASCRIPT_a_2.setAttribute('href', '#');
JAVASCRIPT_a_2.textContent = "Types et comparaisons";

const JAVASCRIPT_a_3 = document.createElement('a');
JAVASCRIPT_a_3.setAttribute('href', '#');
JAVASCRIPT_a_3.textContent = "Conditions";

const JAVASCRIPT_a_4 = document.createElement('a');
JAVASCRIPT_a_4.setAttribute('href', '#');
JAVASCRIPT_a_4.textContent = "Boucles";

const JAVASCRIPT_a_5 = document.createElement('a');
JAVASCRIPT_a_5.setAttribute('href', '#');
JAVASCRIPT_a_5.textContent = "Tableaux";

const JAVASCRIPT_a_6 = document.createElement('a');
JAVASCRIPT_a_6.setAttribute('href', '#');
JAVASCRIPT_a_6.textContent = "Les fonctions";

const JAVASCRIPT_a_7 = document.createElement('a');
JAVASCRIPT_a_7.setAttribute('href', '#');
JAVASCRIPT_a_7.textContent = "Objets";

const JAVASCRIPT_a_8 = document.createElement('a');
JAVASCRIPT_a_8.setAttribute('href', '#');
JAVASCRIPT_a_8.textContent = "Fonction avancées";

const JAVASCRIPT_a_9 = document.createElement('a');
JAVASCRIPT_a_9.setAttribute('href', '#');
JAVASCRIPT_a_9.textContent = "ES6";

const JAVASCRIPT_a_10 = document.createElement('a');
JAVASCRIPT_a_10.setAttribute('href', '#');
JAVASCRIPT_a_10.textContent = "Tableau sur les tableaux";

const JAVASCRIPT_a_11 = document.createElement('a');
JAVASCRIPT_a_11.setAttribute('href', '#');
JAVASCRIPT_a_11.textContent = "Pages Web Dynamiques";

const JAVASCRIPT_a_12 = document.createElement('a');
JAVASCRIPT_a_12.setAttribute('href', '#');
JAVASCRIPT_a_12.textContent = "Le Document Object Model";

const JAVASCRIPT_a_13 = document.createElement('a');
JAVASCRIPT_a_13.setAttribute('href', '#');
JAVASCRIPT_a_13.textContent = "Requêtes sur les pages Web";

const JAVASCRIPT_a_14 = document.createElement('a');
JAVASCRIPT_a_14.setAttribute('href', '#');
JAVASCRIPT_a_14.textContent = "ÉVénements JavaScript";

const JAVASCRIPT_a_15 = document.createElement('a');
JAVASCRIPT_a_15.setAttribute('href', '#');
JAVASCRIPT_a_15.textContent = "Classes JavaScript";

const JAVASCRIPT_a_16 = document.createElement('a');
JAVASCRIPT_a_16.setAttribute('href', '#');
JAVASCRIPT_a_16.textContent = "Programmation orientée objet"; 











/*----------------------------------------------------------------------------
 


*                        Création de la Structure REACT



 ----------------------------------------------------------------------------*/
/* ------------------    Création des Listes Primaire      ----------------- */
 const li_REACT = document.createElement('li');
 

/* ------------------    Création des Lien Primaire      ----------------- */
const a_REACT = document.createElement('a');
a_REACT.setAttribute('href', '#');
a_REACT.textContent = 'REACT';

 
/* ------------------    Création des Ul Secondaire      ----------------- */
const ul_REACT = document.createElement('ul');


/* ------------------    Création des Liste Secondaire     ----------------- */
const REACT_li_1 = document.createElement('li');
const REACT_li_2 = document.createElement('li');
const REACT_li_3 = document.createElement('li');
const REACT_li_4 = document.createElement('li');
const REACT_li_5 = document.createElement('li');

/* ------------------    Création des Lien Secondaire      ----------------- */
const REACT_a_1 = document.createElement('a');
REACT_a_1.setAttribute('href','#');
REACT_a_1.textContent = "Bases du React";

const REACT_a_2 = document.createElement('a');
REACT_a_2.setAttribute('href','#');
REACT_a_2.textContent = "React Intermédiaire";

const REACT_a_3 = document.createElement('a');
REACT_a_3.setAttribute('href','#');
REACT_a_3.textContent = "Crochets de réaction";

const REACT_a_4 = document.createElement('a');
REACT_a_4.setAttribute('href','#');
REACT_a_4.textContent = "Réagir avancé";

const REACT_a_5 = document.createElement('a');
REACT_a_5.setAttribute('href','#');
REACT_a_5.textContent = "Version Controle";









/*----------------------------------------------------------------------------
 


*                      Création de la Structure MYSQL



 ----------------------------------------------------------------------------*/
/* ------------------    Création des Listes Primaire      ----------------- */
 const li_MYSQL = document.createElement('li');


 /* ------------------    Création des Lien Primaire      ----------------- */
 const a_MYSQL = document.createElement('a');
 a_MYSQL.setAttribute('href', '#');
 a_MYSQL.textContent = 'MYSQL';


/* ------------------    Création des Ul Secondaire      ----------------- */
const ul_MYSQL = document.createElement('ul');


/* ------------------    Création des Liste Secondaire     ----------------- */
const MYSQL_li_1 = document.createElement('li');
const MYSQL_li_2 = document.createElement('li');
const MYSQL_li_3 = document.createElement('li');
const MYSQL_li_4 = document.createElement('li');
const MYSQL_li_5 = document.createElement('li');

/* ------------------    Création des Lien Secondaire      ----------------- */
const MYSQL_a_1 = document.createElement('a');
MYSQL_a_1.setAttribute('href','.MYSQL/Base_SQL.html');
MYSQL_a_1.textContent = "Bases SQL";

const MYSQL_a_2 = document.createElement('a');
MYSQL_a_2.setAttribute('href','#');
MYSQL_a_2.textContent = "Filtres SQL";

const MYSQL_a_3 = document.createElement('a');
MYSQL_a_3.setAttribute('href','#');
MYSQL_a_3.textContent = "Fonctions d'agrégation SQL";

const MYSQL_a_4 = document.createElement('a');
MYSQL_a_4.setAttribute('href','#');
MYSQL_a_4.textContent = "Jointures SQL";

const MYSQL_a_5 = document.createElement('a');
MYSQL_a_5.setAttribute('href','#');
MYSQL_a_5.textContent = "Sous-requêtes SQL";





 /*----------------------------------------------------------------------------
 


*                      Création de la Structure BACKEND



 ----------------------------------------------------------------------------*/
 /* ------------------    Création des Listes Primaire      ----------------- */
const li_BACKEND = document.createElement('li');


/* ------------------    Création des Lien Primaire      ----------------- */
const a_BACKEND = document.createElement('a');
a_BACKEND.setAttribute('href', '#');
a_BACKEND.textContent = 'INTRODUCTION AU BACKEND';

































/**----------------------------------------------------------------------------
* 
*                 Placement de la structure dans le body
* 
 ----------------------------------------------------------------------------*/


// Ajout de l'élément "first_ul" à l'intérieur de l'élément "header"
header.appendChild(first_ul);


/**----------------------------------------------------------------------------
 *                 Placement de la structure des Liste Primaire
 ----------------------------------------------------------------------------*/

first_ul.appendChild(li_ACCUEIL);
first_ul.appendChild(li_HTML);
first_ul.appendChild(li_CSS);
first_ul.appendChild(li_JAVASCRIPT);
first_ul.appendChild(li_REACT);
first_ul.appendChild(li_MYSQL);
first_ul.appendChild(li_BACKEND);

/**----------------------------------------------------------------------------
 *                 Placement de la structure des Lien Primaire
 ----------------------------------------------------------------------------*/

 li_ACCUEIL.appendChild(a_ACCUEIL);
 li_HTML.appendChild(a_HTML);
 li_CSS.appendChild(a_CSS);
 li_JAVASCRIPT.appendChild(a_JAVASCRIPT);
 li_REACT.appendChild(a_REACT);
 li_MYSQL.appendChild(a_MYSQL);
 li_BACKEND.appendChild(a_BACKEND);

 /**----------------------------------------------------------------------------
 *                 Placement de la structure des UL
 ----------------------------------------------------------------------------*/

 li_HTML.appendChild(ul_HTML);
 li_CSS.appendChild(ul_CSS);
 li_JAVASCRIPT.appendChild(ul_JAVASCRIPT);
 li_REACT.appendChild(ul_REACT);
 li_MYSQL.appendChild(ul_MYSQL);


/**----------------------------------------------------------------------------
 *                 Placement de la structure des LI Secondaire HTML
 ----------------------------------------------------------------------------*/
 ul_HTML.appendChild(li_HTML_1);
 ul_HTML.appendChild(li_HTML_2);
 ul_HTML.appendChild(li_HTML_3);
 ul_HTML.appendChild(li_HTML_4);
 ul_HTML.appendChild(li_HTML_5);

/**----------------------------------------------------------------------------
 *                 Placement de la structure des Liens Secondaire HTML
 ----------------------------------------------------------------------------*/
 li_HTML_1.appendChild(a_HTML_1);
 li_HTML_2.appendChild(a_HTML_2);
 li_HTML_3.appendChild(a_HTML_3);
 li_HTML_4.appendChild(a_HTML_4);
 li_HTML_5.appendChild(a_HTML_5);


 /**----------------------------------------------------------------------------
 *                 Placement de la structure des ul Secondaire HTML
 ----------------------------------------------------------------------------*/
 li_HTML_1.appendChild(ul_HTML_1);
 li_HTML_2.appendChild(ul_HTML_2);
 li_HTML_3.appendChild(ul_HTML_3);
 li_HTML_4.appendChild(ul_HTML_4);
 li_HTML_5.appendChild(ul_HTML_5);


 /**----------------------------------------------------------------------------
 *                 Placement de la structure des Liste Tertiare HTML
 ----------------------------------------------------------------------------*/
/* ------------------        Bases HTML          ----------------- */
 ul_HTML_1.appendChild(HTML_ul_1_li_1);
 ul_HTML_1.appendChild(HTML_ul_1_li_2);
 ul_HTML_1.appendChild(HTML_ul_1_li_3);
 ul_HTML_1.appendChild(HTML_ul_1_li_4);

/* ------------------        Intermédiaire HTML          ----------------- */
 ul_HTML_2.appendChild(HTML_ul_2_li_1);
 ul_HTML_2.appendChild(HTML_ul_2_li_2);
 ul_HTML_2.appendChild(HTML_ul_2_li_3);
 ul_HTML_2.appendChild(HTML_ul_2_li_4);

/* ------------------        Formulaire HTML          ----------------- */
 ul_HTML_3.appendChild(HTML_ul_3_li_1);
 ul_HTML_3.appendChild(HTML_ul_3_li_2);

/* ------------------        Sémantique HTML          ----------------- */
 ul_HTML_4.appendChild(HTML_ul_4_li_1);
 ul_HTML_4.appendChild(HTML_ul_4_li_2);
 ul_HTML_4.appendChild(HTML_ul_4_li_3);

/* ------------------        Notion d'accessibilité          ----------------- */
 ul_HTML_5.appendChild(HTML_ul_5_li_1);
 ul_HTML_5.appendChild(HTML_ul_5_li_2);


 /**----------------------------------------------------------------------------
 *                 Placement de la structure des Liste Tertiare HTML
 ----------------------------------------------------------------------------*/
 /* ------------------        Bases HTML          ----------------- */
 HTML_ul_1_li_1.appendChild(HTML_li_1_a_1);
 HTML_ul_1_li_2.appendChild(HTML_li_1_a_2);
 HTML_ul_1_li_3.appendChild(HTML_li_1_a_3);
 HTML_ul_1_li_4.appendChild(HTML_li_1_a_4);

/* ------------------        Intermédiaire HTML          ----------------- */
 HTML_ul_2_li_1.appendChild(HTML_li_2_a_1);
 HTML_ul_2_li_2.appendChild(HTML_li_2_a_2);
 HTML_ul_2_li_3.appendChild(HTML_li_2_a_3);
 HTML_ul_2_li_4.appendChild(HTML_li_2_a_4);

/* ------------------        Formulaire HTML          ----------------- */
 HTML_ul_3_li_1.appendChild(HTML_li_3_a_1);
 HTML_ul_3_li_2.appendChild(HTML_li_3_a_2);

/* ------------------        Sémantique HTML          ----------------- */
 HTML_ul_4_li_1.appendChild(HTML_li_4_a_1);
 HTML_ul_4_li_2.appendChild(HTML_li_4_a_2);
 HTML_ul_4_li_3.appendChild(HTML_li_4_a_3);

/* ------------------        Notion d'accessibilité          ----------------- */
 HTML_ul_5_li_1.appendChild(HTML_li_5_a_1);
 HTML_ul_5_li_2.appendChild(HTML_li_5_a_2);



 /**----------------------------------------------------------------------------
 *                 Placement de la structure des Liste secondaire 
 ----------------------------------------------------------------------------*/
 ul_CSS.appendChild(CSS_li_1);
 ul_CSS.appendChild(CSS_li_2);
 ul_CSS.appendChild(CSS_li_3);
 ul_CSS.appendChild(CSS_li_4);
 ul_CSS.appendChild(CSS_li_5);
 ul_CSS.appendChild(CSS_li_6);
 ul_CSS.appendChild(CSS_li_7);
 ul_CSS.appendChild(CSS_li_8);
 ul_CSS.appendChild(CSS_li_9);

  /**----------------------------------------------------------------------------
 *                 Placement de la structure des a secondaire 
 ----------------------------------------------------------------------------*/
 CSS_li_1.appendChild(CSS_a_1);
 CSS_li_2.appendChild(CSS_a_2);
 CSS_li_3.appendChild(CSS_a_3);
 CSS_li_4.appendChild(CSS_a_4);
 CSS_li_5.appendChild(CSS_a_5);
 CSS_li_6.appendChild(CSS_a_6);
 CSS_li_7.appendChild(CSS_a_7);
 CSS_li_8.appendChild(CSS_a_8);
 CSS_li_9.appendChild(CSS_a_9);

 
 /**----------------------------------------------------------------------------
 *                 Placement de la structure des Liste secondaire 
 ----------------------------------------------------------------------------*/
 ul_JAVASCRIPT.appendChild(JAVASCRIPT_li_1);
 ul_JAVASCRIPT.appendChild(JAVASCRIPT_li_2);
 ul_JAVASCRIPT.appendChild(JAVASCRIPT_li_3);
 ul_JAVASCRIPT.appendChild(JAVASCRIPT_li_4);
 ul_JAVASCRIPT.appendChild(JAVASCRIPT_li_5);
 ul_JAVASCRIPT.appendChild(JAVASCRIPT_li_6);
 ul_JAVASCRIPT.appendChild(JAVASCRIPT_li_7);
 ul_JAVASCRIPT.appendChild(JAVASCRIPT_li_8);
 ul_JAVASCRIPT.appendChild(JAVASCRIPT_li_9);
 ul_JAVASCRIPT.appendChild(JAVASCRIPT_li_10);
 ul_JAVASCRIPT.appendChild(JAVASCRIPT_li_11);
 ul_JAVASCRIPT.appendChild(JAVASCRIPT_li_12);
 ul_JAVASCRIPT.appendChild(JAVASCRIPT_li_13);
 ul_JAVASCRIPT.appendChild(JAVASCRIPT_li_14);
 ul_JAVASCRIPT.appendChild(JAVASCRIPT_li_15);
 ul_JAVASCRIPT.appendChild(JAVASCRIPT_li_16);
 
  /**----------------------------------------------------------------------------
 *                 Placement de la structure des a secondaire 
 ----------------------------------------------------------------------------*/
 JAVASCRIPT_li_1.appendChild(JAVASCRIPT_a_1);
 JAVASCRIPT_li_2.appendChild(JAVASCRIPT_a_2);
 JAVASCRIPT_li_3.appendChild(JAVASCRIPT_a_3);
 JAVASCRIPT_li_4.appendChild(JAVASCRIPT_a_4);
 JAVASCRIPT_li_5.appendChild(JAVASCRIPT_a_5);
 JAVASCRIPT_li_6.appendChild(JAVASCRIPT_a_6);
 JAVASCRIPT_li_7.appendChild(JAVASCRIPT_a_7);
 JAVASCRIPT_li_8.appendChild(JAVASCRIPT_a_8);
 JAVASCRIPT_li_9.appendChild(JAVASCRIPT_a_9);
 JAVASCRIPT_li_10.appendChild(JAVASCRIPT_a_10);
 JAVASCRIPT_li_11.appendChild(JAVASCRIPT_a_11);
 JAVASCRIPT_li_12.appendChild(JAVASCRIPT_a_12);
 JAVASCRIPT_li_13.appendChild(JAVASCRIPT_a_13);
 JAVASCRIPT_li_14.appendChild(JAVASCRIPT_a_14);
 JAVASCRIPT_li_15.appendChild(JAVASCRIPT_a_15);
 JAVASCRIPT_li_16.appendChild(JAVASCRIPT_a_16);
 
  /**----------------------------------------------------------------------------
 *                 Placement de la structure des Liste secondaire 
 ----------------------------------------------------------------------------*/
ul_REACT.appendChild(REACT_li_1);
ul_REACT.appendChild(REACT_li_2);
ul_REACT.appendChild(REACT_li_3);
ul_REACT.appendChild(REACT_li_4);
ul_REACT.appendChild(REACT_li_5);
 
  /**----------------------------------------------------------------------------
 *                 Placement de la structure des a secondaire 
 ----------------------------------------------------------------------------*/
 REACT_li_1.appendChild(REACT_a_1);
 REACT_li_2.appendChild(REACT_a_2);
 REACT_li_3.appendChild(REACT_a_3);
 REACT_li_4.appendChild(REACT_a_4);
 REACT_li_5.appendChild(REACT_a_5);
  
  /**----------------------------------------------------------------------------
 *                 Placement de la structure des Liste secondaire 
 ----------------------------------------------------------------------------*/
 ul_MYSQL.appendChild(MYSQL_li_1);
 ul_MYSQL.appendChild(MYSQL_li_2);
 ul_MYSQL.appendChild(MYSQL_li_3);
 ul_MYSQL.appendChild(MYSQL_li_4);
 ul_MYSQL.appendChild(MYSQL_li_5);

  
  /**----------------------------------------------------------------------------
 *                 Placement de la structure des a secondaire 
 ----------------------------------------------------------------------------*/
 MYSQL_li_1.appendChild(MYSQL_a_1);
 MYSQL_li_2.appendChild(MYSQL_a_2);
 MYSQL_li_3.appendChild(MYSQL_a_3);
 MYSQL_li_4.appendChild(MYSQL_a_4);
 MYSQL_li_5.appendChild(MYSQL_a_5);