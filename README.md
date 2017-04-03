
Razred: R 4. A, VEGOVA Ljubljana
Datum: 18. 2. 2015
Avtorja: 
* Matej Jurko: ER model in sql koda
  
* Jan Coso: Wordpress in PHP koda


  
Mentor: 
  Marko Kastelic, prof.
  
  

# NALOGA 1

## OPIS PROBLEMA

Predpostavite, da imate N kandidatov za naloge in M naslovov nalog. Kandidat lahko konkurira za izvedbo poljubnega naslova/naloge. Kandidat v splošnem lahko pristopi k nalogi v primeru, da mu je določen naslov odobren. Postopek dodeljevanja nalog bi želeli avtomaizirati. V procesu nastopa več učiteljev, več kandidatov. Predpostavimo, da posamezen učitelj pripravi nabor večih nalog, ter da vsak kandidat izbira zgolj po eno nalogo iz nabora posameznega učitelja.

V procesu nastopajo :
* učitelj, ki specificira nalogo in kontrolira dodeljevanje,
*	naloga, podana s svojim naslovom, opisom, ključnimi besedami,datum kreiranja naloge, datum objave naloge, začetnim    datumom, končnim datumom za izdelavo/oddajo, največjim št. kandidatov, ki to nalogo lahko izvajajo,        
  avtorjem-učiteljem
*	kandidat, ki izbere iz izvaja nalogo

Izbira naloge je za kandidata dvo-stopenjski proces(izbira, potrjevanje); pri izbiri kandidati izrazijo željo, nato nekdo odgovoren potrdi izbiro naloge.


## PRIMERI RABE:

**registracija uporabnika :** uporabnik se registrira v portal s svojimi identifikacijskimi podatki (ime, priimek, uname, pass, identifkator(davčna, emšo,...). Po uspešni regstraciji dobi status kandidata. (hkrati lahko odda zahtevo po spremembi stausa?)

**sprememba statusa :** uporabnik-upravitelj lahko spremeni status posameznega uporabnika /upravitelj,učitelj,kandidat
definicija nove naloge: uporabnik-učitelj kreira novo nalogo; s kopiranjem in urejanjem obstoječe naloge ali s kreiranjem nove /prazna forma/

**ogled seznama nalog (učitelj) :** pregled nad vsemi nalogami, z označemi atributi (se še ni pričela, v izvajanju, potečena, št. kandidatov,največje št. kandidatov...). Posebej morajo biti označene naloge, ki jih je kreiral ta učitelj

**ogled seznama nalog (kandidat) :** pregled nad vsemi nalogami, ki so v času med datumom objave in končnim datumom za izdelavo. Za ogled so mu na voljo vsi atributi naloge. Označene so njegove izbire in njemu odobrene naloge.
popravljanje/urejanje nalog (učitelj): naloga (atributi) se lahko popravljajo, če naloge še ni izbral noben kandidat oz. še ni prešel začetni datum naloge oz. je prešel končni datum naloge (naloge v izvajanem stanju ne smete spreminjati)

**izbira naloge (učitelj) :** učitelj izbere kandidata iz spiska kandidatov in mu dodeli nalogo iz spiska nalog (možno le, če kandidat še nima potrjene naloge)

**izbira naloge (kandidat) :** kandidat iz spiska nalog izbere nalogo; izbira je možna zgolj takrat, kadar naloga ni v stanju izvajanja (med zač. in končnim datumom)

**preklic izbire naloge (kandiat) :** kandidat lahko prekliče izbiro naloge v primeru, da mu naloga še ni bila potrjena s strani učitelja

*preklic izbire naloge (učitelj) :* učitelj, ki je nalogo podal, lahko kadarkoli prekliče izbiro naloge kandidatu
upravljalska vloga + : upravitelj lahko naredi vse, kar lahko naredijo vsi učitelji

**potrjevanje izbir (učitelj) :** učitelj lahko ročno potrdi vsako izmed izbir kandiatov, učitelj lahko nalogi dodeli kandidata brez njegove predhodne izbire. Ko učitelj potrdi izbiro, kandidat ne more več vplivati na izbrano. /izbira se za kandidata 'zaklene'/

## POTRJEVANJE IZBIR - avtomatizmi (učitelj):
se uporabljajo:
*	ko je učitelj prelen, da bi klikal vsakega kandidata za registracijo naloge ali vpis,
*	ko kandidati niso izbrali naslova,
*	ko je preveč kandidatov želelo izbrati isti naslov.

Po potrdivi izbire, kandidat ne more več vplivati na izbrano.
predlog algoritma za avtomatično izbiro/potrjevanje:
a) nerazporejene kandidate naključno porazdeli po nalogah, kjer največje št. kandidatov ni doseženo
b) v primeru, da je preveč kandidatov za nalogo, uporabi algoritem 'kdor prej pride, prej melje', višek kandidatov vrne med nerazporejene in uporabi algoritem pod a)

poročila : ta funkcionalnost bo precej pokleščena, opredelili se bomo zgolj na minimum za učitelja in upravitelja (da vse skupaj ostane neuporabno). Poročilo se podajajo v treh oblikah: izpis na zaslon (html), izvoz v obliki csv ali xls(excel) datoteke, dokument v formatu pdf
poročila (učitelj): učitelj generira spisek kandidatov, potrjenih po nalogah (naloga, seznam kandidatov), ki je razširjen s spiskom kandidatov, ki nimajo potrjene naloge in so izvedli izbor(izbor, kandidati) in spiskom kandidatov, ki nimajo potrjene naloge in niso izvršili izbora
poročila (upravitelj) : enako kot za posameznega učitelja, le da dobi spisek za vse učitelje
 
