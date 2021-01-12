# Software security website

Dit is mijn taak voor het website gedeelte van software security. 
Ik maak gebruik van het laravel framework met jetstream voor de authenticatie en
de api management.

De email bij het registreren komt in spam. dit los ik nog op.

[Link naar de website](https://aronraes.be)

## Verwerkingsregister
[(TBD) link naar verwerkingsregister]()

## Download user data
Onder de 'profile' pagina staat er een optie om je gegevens te downloaden. Dit
zal een zip file mailen naar jouw email adres met daarin uw user gegevens en uw
blog posts in de vorm van json files.

## Contact
Ik heb een contact pagina toegevoegt die enkel zichbaar is voor aangemelde
gebruikers. Deze pagina kan gebruikt worden als een klachten pagina. Het
formulier wordt naar mijn mail adres gestuurd. Als u dit wilt controleren kan u
altijd een call doen met mij. Dan geef ik ook wat meer uitleg over mijn opdracht.
 
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
```
+-----------+-----------+--------------------------+----------+-----------------------------------------+
| User      | Role      | Email                    | Password | API Token                               |
+-----------+-----------+--------------------------+----------+-----------------------------------------+
| Aron Raes | Beheerder | aron.raes@student.ehb.be | qwfpgjlu | JK5x7uHFdXUwLBDi9uL4UY2NrBOKxK593I7lAOxS
| User 1    | Gebruiker | aron.raes@hotmail.com    | qwfpgjlu | K63iAkuRM8XP76xrd9sPE9cb2lDOkvy68ilGPSHe
```

? Moet de policy ook op de webtoepassing van kracht zijn of enkel op de rest api?


###  Used packages 
https://github.com/jeremykenedy/laravel-roles
https://laravel.com/docs/8.x
https://jetstream.laravel.com/1.x/installation.html
