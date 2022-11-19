const   languages = document.getElementById("languages");
const text = document.querySelectorAll("[titre]");
const navigation = document.getElementById("navbar");

let transslation = {

	ar: {
        home: "الرئيسية",
        services: "خدماتنا",
        sponsor:"التسويق الالكتروني",
        web: "الويب",
        App: "تطبيقات الهاتف",
        team: "فريقنا",
        partner : "شركاؤنا",
        design: "التصميم",
        store:"متاجر الكترونية",
        hosting:"استضافة",
        abouttitle: "حول",
        contact: "اتصل بنا",
        devweb:"مطور ويب",
        designer: "مصمم غرافيكي",
        follow: "تابعنا",
        more : "المزيد",
        add: "العنوان",
        privacy:"سياسة الخصوصية ",
        help : "كيف نقو بمساعدتك؟",
        kawa: "من نحن ؟",
        about: "مجموعة عمل KAWA-SERVICE تقوم بالتسويق الرقمي الاحترافي  ، تصميم وإنشاء الشعارات والأغلفة والملصقات الإعلانية ، تطوير التطبيقات حسب طلب العميل ، برمجة مواقع الويب (نص شخصي ،إحصائي و المواقع الإلكترونية ...) و البرامج وتطبيقات الويب الشخصية ... والعديد من الأشياء بناء على طلب العميل."
    },
	en :{
        home: "Home",
        services: "Services",
        sponsor:"Degital Marketing",
        web: "Web",
        App: "App",
        team: "Team",
        partner : " Our Partners",
        abouttitle:"About Us",
        devweb: "Web Devloper",
        designer: "designer",
        add:"Address",
        help: "How we can help you ?",

        contact: "Contact",
        design: "Design",
        store: "Online Store",
        hosting:"Hosting",
        follow:"Follow Us",
        more : "More",
        kawa: "Who is KAWA Services ?",
        privacy: "Privacy policy",
        about: "KAWA-SERVICE Working group that does Professional digital marketing and study well , design and creation of logos, covers, advertising posters (all of which are graphics, etc.) , development of applications on customer order , Programming of websites (personalized script, statistical website ...) - Programming of software and personalized web applications ... And several things at the customer's request. Welcome to us"
    },
    fr :{
        home: "Acceuil",
        sponsor:"Degital Marketing",
        services: "Services",
        web: "Web",
        App: "App",
        team: "Equipe",
        partner : "Partenaires",
        design: "Designe",
        store: "Boutique En line",
        abouttitle:" A propos ",
        contact: "Contact",
        devweb: "Developpeur Web",
        designer: "designer",
        add: "Aderesse",
        follow : "Suivez Nous",
        more: "Plus",
        help : "Comment povons-nous vous aider ?",
        privacy:"Politique de confidentialité",
        kawa: "Qui est Kawa-Service?",
        about : "KAWA-SERVICE Groupe de travail qui fait du marketing digital professionnel et bien étudié , conception et création de logos, couvertures, affiches publicitaires (tous graphiques, etc.), développement d'applications sur commande client , Programmation de sites internet (script personnalisé, statistiques site web...) - Programmation de logiciels et applications web personnalisées... Et plusieurs choses à la demande du client. Bienvenue chez nous"
    }
	}
		
function mylanguage(){
    if (languages.value=="ar") {
        console.log("arrab")
        navigation.classList.add("arab");
    }else{
        navigation.classList.remove("arab");
        sublist.classList.remove("arab");
    }
        text.forEach(txt =>{
            txt.textContent = transslation[languages.value][txt.getAttribute('titre')] ;})
        
    }