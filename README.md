# interCSS

Un micro–framework CSS progettato per fornire la base stilistica dell’app **myOrganized**.
Contiene tipografia, layout essenziali e componenti primari pensati per essere **estesi** e **specializzati** nelle singole pagine dell’app.

---

## 🎯 Obiettivo

interCSS nasce per avere:

* una tipografia coerente basata su *Segoe UI*
* componenti neutri, puliti e modulari
* uno scheletro estetico minimale in stile Metro moderno
* una struttura pronta per essere personalizzata senza riscrivere ogni volta le basi

---

## 📦 Contenuto

Il framework include:

### **Tipografia**

Classi scalate per titoli, sottotitoli, testi descrittivi e meta tag:

* `.superTitle`
* `.subTitle`
* `.metaTag`
* `.elementTitle`
* `.elementSubtitle`
* `.elementText`

### **Layout & Blocchi**

* `.mainView` → margini globali della pagina
* `.block` → contenitori con ombre morbide, bordi arrotondati, look moderno
* `.eventContainer` → blocchi per raccolte di contenuti/eventi

### **Navbar**

Componenti strutturati in:

* `.navBar`
* `.navBar-L`, `.navBar-Link`, `.navBar-R`
* `.navBar-Brand`, `.navBar-UsrName`, `.navBar-Avatar`

### **Utility**

* `.horAllign` → layout orizzontale flessibile
* classi per allineamenti e spacing

---

## 🧩 Includere interCSS nel progetto

Aggiungi nel tuo `<head>`:

```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- Fogli di stile -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="interCSS.css">
<link rel="stylesheet" href="fontSettings.css">
```

---

## 🔤 Configurazione font (Segoe UI)

Nel file `fontSettings.css` includi le varianti del font con i pesi corretti:

```css
@font-face {
  font-family: "Segoe UI";
  src: url("./fonts/SegoeUI-Light.ttf") format("truetype");
  font-weight: 300;
}

@font-face {
  font-family: "Segoe UI";
  src: url("./fonts/SegoeUI-Regular.ttf") format("truetype");
  font-weight: 400;
}

@font-face {
  font-family: "Segoe UI";
  src: url("./fonts/SegoeUI-Semibold.ttf") format("truetype");
  font-weight: 600;
}

@font-face {
  font-family: "Segoe UI";
  src: url("./fonts/SegoeUI-Bold.ttf") format("truetype");
  font-weight: 700;
}
```

E nel tuo CSS globale:

```css
* {
  font-family: "Segoe UI", sans-serif !important;
}
```

---

## 🛠 Estensioni

interCSS è intenzionalmente semplice: ogni pagina o modulo dell’app può aggiungere un file dedicato per gli stili specifici, mantenendo il core sempre coerente.

---

## 🚀 Stato del progetto

Attualmente in fase **base**.
Perfetto per costruire rapidamente la UI di *myOrganized* con una struttura modulare e un look solido e leggibile.

---

## 📄 Licenza

MIT License.
