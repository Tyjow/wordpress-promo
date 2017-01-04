#Projet CV en XML

Le CV est un élément crucial pour la recherche d'un travail.
Le challenge de cette semaine est donc de l'écrire au sein d'une structure XML. 

La structure XML est un format grandement utilisé dans le monde de l'informatique. Il permet de stocker du contenu et est compris par de nombreux langages de programmation. Ainsi, une fois que vous aurez écrit votre CV dans ce format, il vous sera possible par la suite de le réutiliser de nombreuses fois, de manière différente.


## Etape 1 : Mise en place d'un DTD

### Compréhension de ce qu'est un DTD
Recherches sur Internet pour voir comment est structuré un DTD

Exemple:
```xml
  <?xml version="1.0" encoding="UTF-8" standalone="yes"?>
  <!DOCTYPE liste_de_gens [
  <!ELEMENT liste_de_gens (personne)*>
  <!ELEMENT personne (nom, date_de_naissance?, genre?, numero_de_secu?)>
  <!ELEMENT nom (#PCDATA)>
  <!ELEMENT date_de_naissance (#PCDATA)>
  <!ELEMENT genre (#PCDATA | masculin | féminin) "féminin">
  <!ELEMENT numero_de_secu (#PCDATA)>
  ]>
  <liste_de_gens>
    <personne>
      <nom>Fred Bloggs</nom>
      <date_de_naissance>2008-11-27</date_de_naissance>
      <genre>masculin</genre>
    </personne>
  </liste_de_gens>
```

### Elaboration d'un DTD par équipe de 5 à 6
Concertez vous en groupes de 5 à 6 personnes afin de définir le DTD requis pour l'élaboration d'un CV.

## Etape 2 :  Redaction du CV en solo
En respectant le DTD défini en équipe, créez chacun séparement, votre CV personnel. 
Un second atelier CV sera réalisé la semaine prochaine par Daïna. Ainsi ne vous souciez pas à outrance du contenu. Mais concentrez vous d'avantage sur le respect du DTD.

## Etape 3 : Ajoutez du CSS
Affichez votre XML au sein d'un navigateur. C'est moche hein ?
Le fichier XML, par défaut n'est pas très gracieux au sein d'un navigateur internet. 
Ainsi afin de palier à ce problème, ajoutez une feuille de style afin de personnaliser votre CV. 


**Que la force soit avec vous!**

## Etape 4 : BONUS
Vous êtes contenu du résultat final et vous ne voulez pas déranger les autres en train de travailler? 

En plus, vous avez convenu d'un DTD avec votre groupe mais vous trouvez que le DTD d'un autre groupe est plus interessant ? 
Convertissez votre structure XML en une autre via du XSLT ! 

http://www.freeformatter.com/xsl-transformer.html
