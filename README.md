# Software security website

Dit is mijn taak voor het website gedeelte van software security. 
Ik maak gebruik van het laravel framework met jetstream voor de authenticatie en
de api management.

De email bij het registreren komt in spam. dit los ik nog op.

[Link naar de website](https://aronraes.be)

## Verwerkingsregister
[(TBD) link naar verwerkingsregister]()

## Download user data
Onder de 'user/profile' pagina staat er een optie om je gegevens te downloaden. Dit
zal een zip file mailen naar jouw email adres met daarin uw user gegevens en
alle gegevens gerelateerd aan uw user.

## Contact
Ik heb een contact pagina toegevoegt die enkel zichbaar is voor aangemelde
gebruikers. Deze pagina kan gebruikt worden als een klachten pagina. Het
formulier wordt naar mijn mail adres gestuurd. Als u dit wilt controleren kan u
altijd een call doen met mij. Dan geef ik ook wat meer uitleg over mijn
opdracht.

## Privacy verklaring
De privacy verklaring is terug te vinden op deze pagina: [Privacy Verklaring](https://aronraes.be/privacy-note)
 
## Api endpoints

Voor authenticatie (vb: postman) moet je bij authorization voor bearer token
kiezen, daar vul je een van de onderstaande API Tokens in.

###  Posts
```
+----------------------+------------------+--------------+--------------+------------------+
| Domain               | URI              | Method       | Auth         | Description 	   |
+----------------------+------------------+--------------+--------------+------------------+
| https://aronraes.be/ | api/posts        | GET|HEAD     | NOT REQUIRED | Show all posts   |
| https://aronraes.be/ | api/posts/search | POST         | REQUIRED     | Search for posts |
| https://aronraes.be/ | api/posts        | POST         | REQUIRED     | Make a new post  |
| https://aronraes.be/ | api/posts/{id}   | GET|HEAD     | REQUIRED     | Show post by id  |
| https://aronraes.be/ | api/posts/{id}   | PUT|PATCH    | REQUIRED     | Update a post    |
| https://aronraes.be/ | api/posts/{id}   | DELETE       | REQUIRED     | Delete a post    |
```
####  Status codes
Niets speciaal hier

####  Toegangscontrole
? De gevraagde policy is gemaakt, geen extra features. Moet ik deze hier nog uitschrijven of is dit voldoende?


### Maatregelen tegen courante aanvallen
Ik heb gesubscribed op een mailing list die nieuwe aanvallen en risico's laat
weten: https://us-cert.cisa.gov/ncas/alerts

Ik heb Dependabot toegevoegd aan mijn repo, deze zal mij melden als er nieuwe
kwetsbaarheden zijn.

### CSP
Implemented

### SRI
Alle resources hebben SRI enabled via een package dat dit check, enkel de google
fonts niet (google fonts laat dit niet toe) 

### Verwerkingsregister
 
Contactgegevens:
 
Bedrijfsnaam: Aron Raes, Meidoornlaan 7, 1740 Ternat, e-mailadres: aron.raes@student.ehb.be, telefoonnummer: 0496344475
Verantwoordelijke: A Raes, e-mailadres: aron.raes@student.ehb.be, telefoonnummer: 0496344475
 
Verwerkingsactiviteiten van reguliere persoonsgegevens:
 
Categorie persoonsgegeven(s): Digitale gegevens (IP adressen, inloggegevens)
Categorie betrokkenen: Leden
Grondslag voor de verwerking: Overeenkomst
Doel verwerking: Ledenadministratie
Zelf verwerken: Ja  
Waar bevindt zich de verwerker? Niet van toepassing 
EU Verwerkersovereenkomst? Niet van toepassing/Niet nodig 
Bewaartermijn: onbekend
Veiligheidsmaatregelen: Encryptie persoonsgegevens 
 
Verwerkingsactiviteiten van bijzondere persoonsgegevens: NVT 
 
Datum aanmaken register: 24 januari 2021
Updates: 



###  Used packages 
https://github.com/jeremykenedy/laravel-roles
https://laravel.com/docs/8.x
https://jetstream.laravel.com/1.x/installation.html
https://github.com/spatie/laravel-csp
https://github.com/Elhebert/laravel-sri
https://github.com/mikefrancis/laravel-secureheaders

#### testing
https://securityheaders.com/
