# Inventory-Management-Tool
Inventory Management Tool

3.1 Datenbank
Alle wesentlichen Daten für die Software in MySQL gespeichert. Am Ende sollen vier verschiedene Tabellen für die Benutzer-Verwaltung, Bestandsverwaltung, Historie-Verwaltung, und letztendlich Reservierungsverwaltung zur Verfügung gestellt werden. In der Tabelle werden die kompakten Information über Spalten jeder Tabelle und deren Datentypen näher beschrieben.

![image](https://user-images.githubusercontent.com/67414342/181247796-8468b3ff-cda6-4dd5-bef9-12c6d7ef2976.png)

Die Spalte „_ID“ soll als Primärschlüssel gelten. In Historie-Tabelle gibt es Fremdschlüsseln wie user_ID, rev_ID, and device_ID, die die Primärschüssel jeweils von Reservation- Bestand, und User-Tabellen referenzierten. Nicht nur Historie-Tabelle, die Reservation-Tabelle besitzt auch zwei Fremdschlüssel von Benutzer- bzw. Bestandstabelle. Siehe das Beziehungsschema in der Abbildung 1.

![image](https://user-images.githubusercontent.com/67414342/181247870-5df744a5-8612-482a-94f8-c9716d91741f.png)

3.2 Architektur des Inventarisierungstool
Um einen besseren Überblick zu bekommen, haben wir eine Software-Architektur erstellt, die auf den Anweisungen während des ersten Treffens und den wichtigen Parametern des Projekts basiert.

![image](https://user-images.githubusercontent.com/67414342/181247953-56a166dc-f990-4146-b470-cbb12614cb8c.png)

4.1 Design für die Webseiten
Wie obengenannte funktionale Anforderungen, soll unser Web-Tool aus drei verschiedenen Oberflächen besitzen.
4.1.1 Login und Registration
Zum Einloggen braucht der Anwender ihre E-Mail-Adresse und ihren Kennwort. Falls man noch keine Konto angelegt hat, kann man zuerst den Formular ausfüllen und registrieren. Alle angegebenen Daten werden in Benutzer-Tabelle gespeichert.

![image](https://user-images.githubusercontent.com/67414342/181248033-69bc75c2-303e-492a-97d6-b253f717803a.png)


![image](https://user-images.githubusercontent.com/67414342/181248086-6a4c2a16-e964-4bb4-b88f-3d1ed13aee0c.png)
