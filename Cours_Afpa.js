function Retour() {
    document.getElementById("nav_choix").style.display = "inline-block";
    document.getElementById("nav_menu_Afpa").style.display = "none";
  }


  // Container dans lequel se trouve la structure du menu que l'on veux intègrer.
const header_afpa = document.getElementById('menu_site');

/**----------------------------------------------------------------------------
 * 
 *                      Création de la structure
 * 
 ----------------------------------------------------------------------------*/


// Création de l'élément "ul" et définition de sa id à "nav_menu_Afpa"
const first_ul_afpa = document.createElement('ul');
first_ul_afpa.setAttribute('id', "nav_menu_Afpa");


// Création des éléments "li et a" pour l'accueil du site "Cour_Afpa"
const li_Accueil_Afpa = document.createElement('li');
li_Accueil_Afpa.setAttribute('class', 'Accueil_Afpa');
const a_Accueil_Afpa = document.createElement('a');
a_Accueil_Afpa.setAttribute('href', 'https://diidou.web.app/');
a_Accueil_Afpa.textContent = "ACCUEIL";


// Création des éléments "li et a" pour le HTML du site "Cour_Afpa"
const li_Html_Afpa = document.createElement('li');
li_Html_Afpa.setAttribute('class', 'Html_afpa');
const a_Html_Afpa = document.createElement('a');
a_Html_Afpa.setAttribute('href', '#');
a_Html_Afpa.textContent = "HTML";


// Création des éléments "li et a" pour l'accueil du site "Cour_Afpa"
const li_Css_Afpa = document.createElement('li');
li_Css_Afpa.setAttribute('class', 'CSS_afpa');
const a_Css_Afpa = document.createElement('a');
a_Css_Afpa.setAttribute('href', '#');
a_Css_Afpa.textContent = "CSS";


/* ------------------------------------------------------------------------------------- 

*                                Block Javascript

  ------------------------------------------------------------------------------------- */

// Création des éléments "li et a" pour le javascript du site "Cour_Afpa"
const li_JavaScript_Afpa = document.createElement('li');
li_JavaScript_Afpa.setAttribute('class', 'Javascript_afpa');
const a_JavaScript_Afpa = document.createElement('a');
a_JavaScript_Afpa.setAttribute('href', '#');
a_JavaScript_Afpa.textContent = "JAVASCRIPT";

// Création de  l'éléments "ul" pour le javascript du site "Cour_Afpa"
const ul_Javascript_Afpa = document.createElement('ul');

// Création des éléments "li et a" pour le javascript du site "Cour_Afpa"
const li_Evenement_JS_Afpa = document.createElement('li');
const a_Evenement_JS_Afpa = document.createElement('a');
a_Evenement_JS_Afpa.setAttribute('href', 'https://diidou.web.app/Afpa/JAVASCRIPT/Changement_avec_evenement.html');
a_Evenement_JS_Afpa.textContent = "ÉVénement JS";

const li_Carousel_JS_Afpa = document.createElement('li');
const a_Carousel_JS_Afpa = document.createElement('a');
a_Carousel_JS_Afpa.setAttribute('href', 'https://diidou.web.app/Afpa/JAVASCRIPT/Carousel_responsive.html');
a_Carousel_JS_Afpa.textContent = "Carousel avec JS";









// Création des éléments "li et a" pour le php du site "Cour_Afpa"
const li_Php_Afpa = document.createElement('li');
li_Php_Afpa.setAttribute('class', 'Php_afpa');
const a_Php_Afpa = document.createElement('a');
a_Php_Afpa.setAttribute('href', '#');
a_Php_Afpa.textContent = "PHP";




header_afpa.appendChild(first_ul_afpa);

first_ul_afpa.appendChild(li_Accueil_Afpa);
li_Accueil_Afpa.appendChild(a_Accueil_Afpa);

first_ul_afpa.appendChild(li_Html_Afpa);
li_Html_Afpa.appendChild(a_Html_Afpa);

first_ul_afpa.appendChild(li_Css_Afpa);
li_Css_Afpa.appendChild(a_Css_Afpa);

first_ul_afpa.appendChild(li_JavaScript_Afpa);
li_JavaScript_Afpa.appendChild(a_JavaScript_Afpa);
li_JavaScript_Afpa.appendChild(ul_Javascript_Afpa);
ul_Javascript_Afpa.appendChild(li_Evenement_JS_Afpa);
li_Evenement_JS_Afpa.appendChild(a_Evenement_JS_Afpa);
ul_Javascript_Afpa.appendChild(li_Carousel_JS_Afpa);
li_Carousel_JS_Afpa.appendChild(a_Carousel_JS_Afpa);

first_ul_afpa.appendChild(li_Php_Afpa);
li_Php_Afpa.appendChild(a_Php_Afpa);