function pagemanipulation(cur_page_name, cur_nav_link_id, eng_page_path, deu_page_path){
    if(cur_nav_link_id=="1" || cur_nav_link_id=="2"){
        $("a.header-brand-link" + cur_nav_link_id).addClass("active-link");
        $(".dynamic-li1").hide();
        $(".dynamic-li2").hide();
        $("#footer1").hide();
    }
    $("select option#lange").val(eng_page_path);
    $("select option#langd").val(deu_page_path);
    $("span#cur_page").text(cur_page_name);
    //$(".dynamic-li2>a").text(cur_page_name+"#level")
};


function menumanipulation(menuIdVal,ilng){
    if(ilng=="e"){
        $.each(menuDataEng.menu, function (i) {
            var pagenamel3 = this.l3Url;
            var pagenamel4 = this.l4Url;
            if (i==menuIdVal) {
                $.each(this.subMenuL3, function () {
                    $("#l3ddn").append("<li><a class='dropdown-item hov-item' href=" + pagenamel3 + this.optionUrl + ">" + this.option + "</a></li>");
                    $("#chapterddn").append("<li><a class='dropdown-item hov-item' href=" + pagenamel3 + this.optionUrl + ">" + this.option + "</a></li>");
                });
                $.each(this.subMenuL4, function () {
                    $("#l4ddn").append("<li><a class='dropdown-item hov-item' href=" + pagenamel4 + this.optionUrl + ">" + this.option + "</a></li>");
                    $("#chapterddn").append("<li><a class='dropdown-item hov-item' href=" + pagenamel4 + this.optionUrl + ">" + this.option + "</a></li>");
                });
            }
        }); 
    }else if(ilng=="d"){
        $.each(menuDataDeu.menu, function (i) {
            var pagenamel3 = this.l3Url;
            var pagenamel4 = this.l4Url;
            if (i==menuIdVal) {
                $.each(this.subMenuL3, function () {
                    $("#l3ddn").append("<li><a class='dropdown-item hov-item' href=" + pagenamel3 + this.optionUrl + ">" + this.option + "</a></li>");
                    $("#chapterddn").append("<li><a class='dropdown-item hov-item' href=" + pagenamel3 + this.optionUrl + ">" + this.option + "</a></li>");
                });
                $.each(this.subMenuL4, function () {
                    $("#l4ddn").append("<li><a class='dropdown-item hov-item' href=" + pagenamel4 + this.optionUrl + ">" + this.option + "</a></li>");
                    $("#chapterddn").append("<li><a class='dropdown-item hov-item' href=" + pagenamel4 + this.optionUrl + ">" + this.option + "</a></li>");
                });
            }
        });
    }
};





var menuDataEng = {
        "menu": [{
                "id": "menu1",
                "menuName": "Sustainable Menu",
                "l3Url": "introduction-to-sustainable-menu-eng.php",
                "l4Url": "explore-sustainable-menu-eng.php",
                "subMenuL3": [{
                        "option": "Why it is important to offer a sustainable menu",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "Did you know that...",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "The big issue",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "Benefits",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "The greater impact",
                        "optionUrl": "#option5",
                    },
                    {
                        "option": "Steps to create sustainable menu",
                        "optionUrl": "#option6",
                    }
                ],
                "subMenuL4": [{
                        "option": "How to create sustainable menu",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "Simple ways to create sustainable menu",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "Good to know - Different ways of eating",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "Advance ways to create sustainable menu",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "Highlight your sustainable menu",
                        "optionUrl": "#option5",
                    },
                    {
                        "option": "Lena's kitchen",
                        "optionUrl": "#option6",
                    },
                    {
                        "option": "Track and talk about your progress",
                        "optionUrl": "#option7",
                    },
                    {
                        "option": "Your action plan",
                        "optionUrl": "#option8",
                    }
                ]
            },
            {
                "id": "menu2",
                "menuName": "Responsible sourcing",
                "l3Url": "introduction-to-responsible-sourcing-eng.php",
                "l3DeuUrl": "introduction-to-responsible-sourcing-deu.php",
                "l4Url": "explore-responsible-sourcing-eng.php",
                "l4DeuUrl": "explore-responsible-sourcing-deu.php",
                "subMenuL3": [{
                        "option": "How to source products responsibly for restaurants ",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "Did you know that...",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "The big issue",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "Benefits",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "The greater impact",
                        "optionUrl": "#option5",
                    },
                    {
                        "option": "Steps to source responsibly",
                        "optionUrl": "#option6",
                    }
                ],
                "subMenuL4": [{
                        "option": "How to source responsibly",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "The importance of sourcing responsibly",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "Good to know - schemes that help you find your way",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "Non-certified sustainable products",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "The comprehensive guide to sustainable products",
                        "optionUrl": "#option5",
                    },
                    {
                        "option": "Simple ways to source responsibly",
                        "optionUrl": "#option6",
                    },
                    {
                        "option": "Advanced ways to source responsibly",
                        "optionUrl": "#option7",
                    },
                    {
                        "option": "Track and talk about your progress",
                        "optionUrl": "#option8",
                    },
                    {
                        "option": "Your action plan",
                        "optionUrl": "#option9",
                    }
                ]
            },
            {
                "id": "menu3",
                "menuName": "Food waste",
                "l3Url": "introduction-to-food-waste-eng.php",
                "l3DeuUrl": "introduction-to-food-waste-deu.php",
                "l4Url": "explore-food-waste-eng.php",
                "l4DeuUrl": "explore-food-waste-deu.php",
                "subMenuL3": [{
                        "option": "Why we need to reduce food waste",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "Did you know that...",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "The big issue",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "Benefits",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "The greater impact",
                        "optionUrl": "#option5",
                    },
                    {
                        "option": "Steps to avoid food waste",
                        "optionUrl": "#option6",
                    }
                ],
                "subMenuL4": [{
                        "option": "How to reduce food waste",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "Landfills should be the last place for food waste",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "Good to know",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "Simple ways to prevent food waste",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "Advanced ways to reduce food waste",
                        "optionUrl": "#option5",
                    },
                    {
                        "option": "Learn to make more out of food scraps",
                        "optionUrl": "#option6",
                    },
                    {
                        "option": "Track and talk about your progress",
                        "optionUrl": "#option7",
                    },
                    {
                        "option": "Your action plan",
                        "optionUrl": "#option8",
                    }
                ]
            },
            {
                "id": "menu4",
                "menuName": "Plastic waste",
                "l3Url": "introduction-to-plastic-waste-eng.php",
                "l3DeuUrl": "introduction-to-plastic-waste-deu.php",
                "l4Url": "explore-plastic-waste-eng.php",
                "l4DeuUrl": "explore-plastic-waste-deu.php",
                "subMenuL3": [{
                        "option": "The role of plastic in gastronomy",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "Did you know that...",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "The big issue",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "Benefits",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "The greater impact",
                        "optionUrl": "#option5",
                    },
                    {
                        "option": "Steps to minimize plastic waste",
                        "optionUrl": "#option6",
                    }
                ],
                "subMenuL4": [{
                        "option": "How to avoid plastic waste",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "How to prevent plastic waste",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "Simple waste audit",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "Good to know",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "Simple ways to prevent plastic waste",
                        "optionUrl": "#option5",
                    },
                    {
                        "option": "Advanced ways to save plastic waste",
                        "optionUrl": "#option6",
                    },
                    {
                        "option": "Track and talk about your progress",
                        "optionUrl": "#option7",
                    },
                    {
                        "option": "Your action plan",
                        "optionUrl": "#option8",
                    }
                ]
            },
            {
                "id": "menu5",
                "menuName": "Safe food",
                "l3Url": "introduction-to-safe-food-eng.php",
                "l3DeuUrl": "introduction-to-safe-food-deu.php",
                "l4Url": "explore-safe-food-eng.php",
                "l4DeuUrl": "explore-safe-food-deu.php",
                "subMenuL3": [{
                        "option": "Why we need to talk about safe food",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "Did you know that...",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "The big issue",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "Benefits",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "The greater impact",
                        "optionUrl": "#option5",
                    },
                    {
                        "option": "Steps to ensure safe food",
                        "optionUrl": "#option6",
                    }
                ],
                "subMenuL4": [{
                        "option": "How to ensure safe food",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "Good to know",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "Three steps to food safety",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "Track and talk about your progress",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "Your action plan",
                        "optionUrl": "#option5",
                    }
                ]
            },
            {
                "id": "menu6",
                "menuName": "Energy",
                "l3Url": "introduction-to-energy-eng.php",
                "l3DeuUrl": "introduction-to-energy-deu.php",
                "l4Url": "explore-energy-eng.php",
                "l4DeuUrl": "explore-energy-deu.php",
                "subMenuL3": [{
                        "option": "How to use less energy in your restaurant and save cost",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "Did you know that...",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "The big issue",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "Benefits",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "The greater impact",
                        "optionUrl": "#option5",
                    },
                    {
                        "option": "Steps to reduce energy consumption",
                        "optionUrl": "#option6",
                    }
                ],
                "subMenuL4": [{
                        "option": "How to use energy efficiently",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "Good to know",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "Simple ways to save energy",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "Advanced ways to save energy",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "Track and talk about your progress",
                        "optionUrl": "#option5",
                    },
                    {
                        "option": "Your action plan",
                        "optionUrl": "#option6",
                    }
                ]
            },
            {
                "id": "menu7",
                "menuName": "Water",
                "l3Url": "introduction-to-water-eng.php",
                "l3DeuUrl": "introduction-to-water-deu.php",
                "l4Url": "explore-water-eng.php",
                "l4DeuUrl": "explore-water-deu.php",
                "subMenuL3": [{
                        "option": "How to save water in your restaurant",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "Did you know that...",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "The big issue",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "Benefits",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "The greater impact",
                        "optionUrl": "#option5",
                    },
                    {
                        "option": "Steps to save water",
                        "optionUrl": "#option6",
                    }
                ],
                "subMenuL4": [{
                        "option": "How to use water responsibly",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "Good to know",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "Simple ways to save water",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "Advanced ways to save water",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "Track and talk about your progress",
                        "optionUrl": "#option5",
                    },
                    {
                        "option": "Your action plan",
                        "optionUrl": "#option6",
                    }
                ]
            },
            {
                "id": "menu8",
                "menuName": "Waste",
                "l3Url": "introduction-to-waste-eng.php",
                "l3DeuUrl": "introduction-to-waste-deu.php",
                "l4Url": "explore-waste-eng.php",
                "l4DeuUrl": "explore-waste-deu.php",
                "subMenuL3": [{
                        "option": "The problem with waste",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "Did you know that...",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "The big issue",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "Benefits",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "The greater impact",
                        "optionUrl": "#option5",
                    },
                    {
                        "option": "Steps to reduce waste",
                        "optionUrl": "#option6",
                    }
                ],
                "subMenuL4": [{
                        "option": "How to use reduce waste",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "Good to know",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "Simple steps to start managing waste",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "How to maximise sorting waste",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "Track and talk about your progress",
                        "optionUrl": "#option5",
                    },
                    {
                        "option": "Your action plan",
                        "optionUrl": "#option6",
                    }
                ]
            },
            {
                "id": "menu9",
                "menuName": "Social",
                "l3Url": "introduction-to-social-eng.php",
                "l3DeuUrl": "introduction-to-social-deu.php",
                "l4Url": "explore-social-eng.php",
                "l4DeuUrl": "explore-social-deu.php",
                "subMenuL3": [{
                        "option": "Why the gastronomy industry must engage socially",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "Did you know that...",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "The big issue",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "Benefits",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "The greater impact",
                        "optionUrl": "#option5",
                    },
                    {
                        "option": "Steps to act socially",
                        "optionUrl": "#option6",
                    }
                ],
                "subMenuL4": [{
                        "option": "How to engage socially as a restaurateur",
                        "optionUrl": "#option1",
                    },
                    {
                        "option": "Good to know",
                        "optionUrl": "#option2",
                    },
                    {
                        "option": "The 7 Basic Human Rights",
                        "optionUrl": "#option3",
                    },
                    {
                        "option": "Ways to be socially engaged as a restaurateur",
                        "optionUrl": "#option4",
                    },
                    {
                        "option": "Track and talk about your progress",
                        "optionUrl": "#option5",
                    },
                    {
                        "option": "Your action plan",
                        "optionUrl": "#option6",
                    }
                ]
            },
        ]
    }

var menuDataDeu = {
    "menu": [{
            "id": "menu1",
            "menuName": "Nachhaltige Speisekarte",
            "l3Url": "introduction-to-sustainable-menu-deu.php",
            "l4Url": "explore-sustainable-menu-deu.php",
            "subMenuL3": [{
                    "option": "Warum es wichtig ist, ein nachhaltiges Menü anzubieten",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Wussten Sie, dass…",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Ein wichtiges Thema",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Vorteile",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Ein gesellschaftlicher Trend",
                    "optionUrl": "#option5",
                },
                {
                    "option": "Mit einfachen Schritten zur nachhaltigen Speisekarte",
                    "optionUrl": "#option6",
                }
            ],
            "subMenuL4": [{
                    "option": "So wird Ihre Speisekarte nachhaltiger",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Einfache Schritte, um eine nachhaltige Speisekarte zu erstellen",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Gut zu wissen – Unterschiedliche Ernährungsformen",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Erfahren Sie alles über die Diversifizierung von Proteinen",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Heben Sie nachhaltige Gerichte hervor ",
                    "optionUrl": "#option5",
                },
                {
                    "option": "Lenas Küche",
                    "optionUrl": "#option6",
                },
                {
                    "option": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber",
                    "optionUrl": "#option7",
                },
                {
                    "option": "Ihr Aktionsplan",
                    "optionUrl": "#option8",
                }
            ]
        },
        {
            "id": "menu2",
            "menuName": "Responsible sourcing",
            "l3Url": "introduction-to-responsible-sourcing-deu.php",
            "l3DeuUrl": "introduction-to-responsible-sourcing-deu.php",
            "l4Url": "explore-responsible-sourcing-deu.php",
            "l4DeuUrl": "explore-responsible-sourcing-deu.php",
            "subMenuL3": [{
                    "option": "Wie man Produkte für Restaurants verantwortungsbewusst einkauft",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Wussten Sie, dass…",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Ein wichtiges Thema",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Vorteile",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Ein gesellschaftlicher Trend",
                    "optionUrl": "#option5",
                },
                {
                    "option": "Erste Schritte, wie Sie verantwortungsbewusst einkaufen",
                    "optionUrl": "#option6",
                }
            ],
            "subMenuL4": [{
                    "option": "Wie Sie verantwortungsbewusst einkaufen",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Die Bedeutung eines verantwortungsbewussten Einkaufs",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Gut zu wissen – Siegel und Zertifizierungen können Ihnen helfen, Ihren Weg zu gehen",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Nicht-zertifizierte nachhaltige Produkte",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Der umfassende Leitfaden für nachhaltige Produkte",
                    "optionUrl": "#option5",
                },
                {
                    "option": "Tipps für Einsteiger, um verantwortungsbewusst Einzukaufen",
                    "optionUrl": "#option6",
                },
                {
                    "option": "Tipps für Fortgeschrittene, um verantwortungsbewusst einzukaufen",
                    "optionUrl": "#option7",
                },
                {
                    "option": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber",
                    "optionUrl": "#option8",
                },
                {
                    "option": "Ihr Aktionsplan",
                    "optionUrl": "#option9",
                }
            ]
        },
        {
            "id": "menu3",
            "menuName": "Food waste",
            "l3Url": "introduction-to-food-waste-deu.php",
            "l3DeuUrl": "introduction-to-food-waste-deu.php",
            "l4Url": "explore-food-waste-deu.php",
            "l4DeuUrl": "explore-food-waste-deu.php",
            "subMenuL3": [{
                    "option": "Warum wir die Menge an Lebensmittelabfällen reduzieren müssen",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Wussten Sie, dass…",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Ein wichtiges Thema",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Vorteile",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Ein gesellschaftlicher Trend",
                    "optionUrl": "#option5",
                },
                {
                    "option": "Erste Schritte, wie Sie die Menge an Lebensmittelabfällen verringern",
                    "optionUrl": "#option6",
                }
            ],
            "subMenuL4": [{
                    "option": "Wie Sie Lebensmittelabfälle reduzieren",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Mülldeponien sollten der letzte Ort sein, auf dem nicht benötigte Lebensmittel landen",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Gut zu wissen",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Tipps für Einsteiger, um Lebensmittelabfälle zu reduzieren",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Tipps für Fortgeschrittene, um die Menge an Lebensmittelabfällen zu reduzieren",
                    "optionUrl": "#option5",
                },
                {
                    "option": "Kompostieren Sie Lebensmittelabfälle",
                    "optionUrl": "#option6",
                },
                {
                    "option": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber",
                    "optionUrl": "#option7",
                },
                {
                    "option": "Ihr Aktionsplan",
                    "optionUrl": "#option8",
                }
            ]
        },
        {
            "id": "menu4",
            "menuName": "Plastic waste",
            "l3Url": "introduction-to-plastic-waste-deu.php",
            "l3DeuUrl": "introduction-to-plastic-waste-deu.php",
            "l4Url": "explore-plastic-waste-deu.php",
            "l4DeuUrl": "explore-plastic-waste-deu.php",
            "subMenuL3": [{
                    "option": "Die Bedeutung von Plastik in der Gastronomie",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Wussten Sie, dass…",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Ein wichtiges Thema",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Vorteile",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Ein gesellschaftlicher Trend",
                    "optionUrl": "#option5",
                },
                {
                    "option": "Erste Schritte, wie Sie Plastikmüll reduzieren",
                    "optionUrl": "#option6",
                }
            ],
            "subMenuL4": [{
                    "option": "Wie Sie Plastikmüll vermeiden",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Plastikmüll in der Gastronomie",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Wie Sie Plastikmüll vermeiden",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Gut zu wissen",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Tipps für Einsteiger, um Plastikmüll zu vermeiden",
                    "optionUrl": "#option5",
                },
                {
                    "option": "Tipps für Fortgeschrittene, um Plastikmüll zu vermeiden",
                    "optionUrl": "#option6",
                },
                {
                    "option": "Überprüfen Sie ihre Fortschritte und sprechen Sie darüber",
                    "optionUrl": "#option7",
                },
                {
                    "option": "Ihr Aktionsplan",
                    "optionUrl": "#option8",
                }
            ]
        },
        {
            "id": "menu5",
            "menuName": "Safe food",
            "l3Url": "introduction-to-safe-food-deu.php",
            "l3DeuUrl": "introduction-to-safe-food-deu.php",
            "l4Url": "explore-safe-food-deu.php",
            "l4DeuUrl": "explore-safe-food-deu.php",
            "subMenuL3": [{
                    "option": "Warum wir über Lebensmittelsicherheit sprechen müssen",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Wussten Sie, dass…",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Ein wichtiges Thema",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Vorteile",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Ein gesellschaftlicher Trend",
                    "optionUrl": "#option5",
                },
                {
                    "option": "Erste Schritte, wie Sie Lebensmittelsicherheit sicherstellen",
                    "optionUrl": "#option6",
                }
            ],
            "subMenuL4": [{
                    "option": "Lebensmittelsicherheit ist die Basis",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Gut zu wissen",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Drei Schritte für mehr Lebensmittelsicherheit",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Überprüfen Sie Ihre Fortschritte und reden Sie darüber",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Ihr Aktionsplan",
                    "optionUrl": "#option5",
                }
            ]
        },
        {
            "id": "menu6",
            "menuName": "Energy",
            "l3Url": "introduction-to-energy-deu.php",
            "l3DeuUrl": "introduction-to-energy-deu.php",
            "l4Url": "explore-energy-deu.php",
            "l4DeuUrl": "explore-energy-deu.php",
            "subMenuL3": [{
                    "option": "Wie Sie in Ihrem Restaurant weniger Energie verbrauchen und damit Kosten sparen",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Wussten Sie, dass…",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Ein wichtiges Thema",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Vorteile",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Ein gesellschaftlicher Trend",
                    "optionUrl": "#option5",
                },
                {
                    "option": "Erste Schritte, wie Sie den Energieverbrauch senken",
                    "optionUrl": "#option6",
                }
            ],
            "subMenuL4": [{
                    "option": "Wie man Energie effizient nutzt",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Gut zu wissen",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Tipps für Einsteiger, um Energie zu sparen",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Tipps für Fortgeschrittene, um Energie zu sparen",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber",
                    "optionUrl": "#option5",
                },
                {
                    "option": "Ihr Aktionsplan",
                    "optionUrl": "#option6",
                }
            ]
        },
        {
            "id": "menu7",
            "menuName": "Water",
            "l3Url": "introduction-to-water-deu.php",
            "l3DeuUrl": "introduction-to-water-deu.php",
            "l4Url": "explore-water-deu.php",
            "l4DeuUrl": "explore-water-deu.php",
            "subMenuL3": [{
                    "option": "Wie Sie in Ihrem Restaurant Wasser sparen können",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Wussten Sie, dass…",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Ein wichtiges Thema",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Vorteile",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Ein gesellschaftlicher Trend",
                    "optionUrl": "#option5",
                },
                {
                    "option": "Erste Schritte, wie Sie Wasser sparen",
                    "optionUrl": "#option6",
                }
            ],
            "subMenuL4": [{
                    "option": "Wie man Wasser verantwortungsvoll nutzt",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Gut zu wissen",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Tipps für Einsteiger, um Wasser zu sparen",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Tipps für Fortgeschrittene, um Wasser zu sparen",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber",
                    "optionUrl": "#option5",
                },
                {
                    "option": "Ihr Aktionsplan",
                    "optionUrl": "#option6",
                }
            ]
        },
        {
            "id": "menu8",
            "menuName": "Waste",
            "l3Url": "introduction-to-waste-deu.php",
            "l3DeuUrl": "introduction-to-waste-deu.php",
            "l4Url": "explore-waste-deu.php",
            "l4DeuUrl": "explore-waste-deu.php",
            "subMenuL3": [{
                    "option": "Das Problem mit dem Abfall",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Wussten Sie, dass…",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Ein wichtiges Thema",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Vorteile",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Ein gesellschaftlicher Trend",
                    "optionUrl": "#option5",
                },
                {
                    "option": "Erste Schritte, wie Sie Abfall vermeiden",
                    "optionUrl": "#option6",
                }
            ],
            "subMenuL4": [{
                    "option": "Wie man Abfall reduziert",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Gut zu wissen",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Tipps für Einsteiger, um weniger Abfall zu produzieren",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Wie Sie das Beste aus Ihrem Abfall herausholen",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber",
                    "optionUrl": "#option5",
                },
                {
                    "option": "Ihr Aktionsplan",
                    "optionUrl": "#option6",
                }
            ]
        },
        {
            "id": "menu9",
            "menuName": "Social",
            "l3Url": "introduction-to-social-deu.php",
            "l3DeuUrl": "introduction-to-social-deu.php",
            "l4Url": "explore-social-deu.php",
            "l4DeuUrl": "explore-social-deu.php",
            "subMenuL3": [{
                    "option": "Warum sich das Gastgewerbe sozial engagieren muss",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Wussten Sie, dass…",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Ein wichtiges Thema",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Vorteile",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Ein gesellschaftlicher Trend",
                    "optionUrl": "#option5",
                },
                {
                    "option": "Erste Schritte, wie Sie sozial handeln",
                    "optionUrl": "#option6",
                }
            ],
            "subMenuL4": [{
                    "option": "Wie Sie sich als Gastronomiebetreibende sozial engagieren können",
                    "optionUrl": "#option1",
                },
                {
                    "option": "Gut zu wissen",
                    "optionUrl": "#option2",
                },
                {
                    "option": "Die 7 Grundrechte",
                    "optionUrl": "#option3",
                },
                {
                    "option": "Wege, um sich als Gastronomin oder Gastronom sozial zu engagieren",
                    "optionUrl": "#option4",
                },
                {
                    "option": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber",
                    "optionUrl": "#option5",
                },
                {
                    "option": "Ihr Aktionsplan",
                    "optionUrl": "#option6",
                }
            ]
        },
    ]
}

//search
jQuery(function ($) {

    $('#sq1').autocomplete({
        source: jSearchDataEng,
        select: function (event, ui) {
            console.log(ui.item.url)
            // redirect to url
            window.location = ui.item.url
        }

    });
});


jQuery(function ($) {

    $('#sq2').autocomplete({
        source: jSearchDataDeu,
        select: function (event, ui) {
            console.log(ui.item.url)
            // redirect to url
            window.location = ui.item.url
        }

    });
});

var jSearchDataEng = [
    {//sustainable menu l3
        "value": "Why it is important to offer a sustainable menu",
        "label": "Why it is important to offer a sustainable menu - Sustainable menu",
        "url": "introduction-to-sustainable-menu-eng.php#option1"
    },
    {
        "value": "Did you know that...",
        "label": "Did you know that... - Sustainable menu",
        "url": "introduction-to-sustainable-menu-eng.php#option2"
    },
    {
        "value": "The big issue",
        "label": "The big issue - Sustainable menu",
        "url": "introduction-to-sustainable-menu-eng.php#option3"
    },
    {
        "value": "Benefits",
        "label": "Benefits - Sustainable menu",
        "url": "introduction-to-sustainable-menu-eng.php#option4"
    },
    {
        "value": "The greater impact",
        "label": "The greater impact - Sustainable menu",
        "url": "introduction-to-sustainable-menu-eng.php#option5"
    },
    {
        "value": "Steps to create sustainable menu",
        "label": "Steps to create sustainable menu - Sustainable menu",
        "url": "introduction-to-sustainable-menu-eng.php#option6"
    },
    {//sustainable menu l4
        "value": "How to create sustainable menu",
        "label": "How to create sustainable menu - Sustainable menu",
        "url": "explore-sustainable-menu-eng.php#option1"
    },
    {
        "value": "Simple ways to create sustainable menu",
        "label": "Simple ways to create sustainable menu - Sustainable menu",
        "url": "explore-sustainable-menu-eng.php#option2"
    },
    {
        "value": "Good to know - Different ways of eating",
        "label": "Good to know - Different ways of eating - Sustainable menu",
        "url": "explore-sustainable-menu-eng.php#option3"
    },
    {
        "value": "Advance ways to create sustainable menu",
        "label": "Advance ways to create sustainable menu - Sustainable menu",
        "url": "explore-sustainable-menu-eng.php#option4"
    },
    {
        "value": "Highlight your sustainable menu",
        "label": "Highlight your sustainable menu - Sustainable menu",
        "url": "explore-sustainable-menu-eng.php#option5"
    },
    {
        "value": "Lena's kitchen",
        "label": "Lena's kitchen - Sustainable menu",
        "url": "explore-sustainable-menu-eng.php#option6"
    },
    {
        "value": "Track and talk about your progress",
        "label": "Track and talk about your progress - Sustainable menu",
        "url": "explore-sustainable-menu-eng.php#option7"
    },
    {
        "value": "Your action plan",
        "label": "Your action plan - Sustainable menu",
        "url": "explore-sustainable-menu-eng.php#option8"
    },
    {//responsible sourcing l3
        "value": "How to source products responsibly for restaurants",
        "label": "How to source products responsibly for restaurants - Responsible sourcing",
        "url": "introduction-to-responsible-sourcing-deu.php#option1"
    },
    {
        "value": "Did you know that...",
        "label": "Did you know that... - Responsible sourcing",
        "url": "introduction-to-responsible-sourcing-deu.php#option2"
    },
    {
        "value": "The big issue",
        "label": "The big issue - Responsible sourcing",
        "url": "introduction-to-responsible-sourcing-deu.php#option3"
    },
    {
        "value": "Benefits",
        "label": "Benefits - Responsible sourcing",
        "url": "introduction-to-responsible-sourcing-deu.php#option4"
    },
    {
        "value": "The greater impact",
        "label": "The greater impact - Responsible sourcing",
        "url": "introduction-to-responsible-sourcing-deu.php#option5"
    },
    {
        "value": "Steps to source responsibly",
        "label": "Steps to source responsibly - Responsible sourcing",
        "url": "introduction-to-responsible-sourcing-deu.php#option6"
    },
    {//responsible sourcing l4
        "value": "How to source responsibly",
        "label": "How to source responsibly - Responsible sourcing",
        "url": "explore-responsible-sourcing-eng.php#option1"
    },
    {
        "value": "The importance of sourcing responsibly",
        "label": "The importance of sourcing responsibly - Responsible sourcing",
        "url": "explore-responsible-sourcing-eng.php#option2"
    },
    {
        "value": "Good to know - schemes that help you find your way",
        "label": "Good to know - schemes that help you find your way - Responsible sourcing",
        "url": "explore-responsible-sourcing-eng.php#option3"
    },
    {
        "value": "Non-certified sustainable products",
        "label": "Non-certified sustainable products - Responsible sourcing",
        "url": "explore-responsible-sourcing-eng.php#option4"
    },
    {
        "value": "The comprehensive guide to sustainable products",
        "label": "The comprehensive guide to sustainable products - Responsible sourcing",
        "url": "explore-responsible-sourcing-eng.php#option5"
    },
    {
        "value": "Simple ways to source responsibly",
        "label": "Simple ways to source responsibly - Responsible sourcing",
        "url": "explore-responsible-sourcing-eng.php#option6"
    },
    {
        "value": "Advanced ways to source responsibly",
        "label": "Advanced ways to source responsibly - Responsible sourcing",
        "url": "explore-responsible-sourcing-eng.php#option7"
    },
    {
        "value": "Track and talk about your progress",
        "label": "Track and talk about your progress - Responsible sourcing",
        "url": "explore-responsible-sourcing-eng.php#option8"
    },
    {
        "value": "Your action plan",
        "label": "Your action plan - Responsible sourcing",
        "url": "explore-responsible-sourcing-eng.php#option9"
    },
    {//responsible sourcing l3
        "value": "Why we need to reduce food waste",
        "label": "Why we need to reduce food waste - Food waste",
        "url": "introduction-to-food-waste-eng.php#option1"
    },
    {
        "value": "Did you know that...",
        "label": "Did you know that... - Food waste",
        "url": "introduction-to-food-waste-eng.php#option2"
    },
    {
        "value": "The big issue",
        "label": "The big issue - Food waste",
        "url": "introduction-to-food-waste-eng.php#option3"
    },
    {
        "value": "Benefits",
        "label": "Benefits - Food waste",
        "url": "introduction-to-food-waste-eng.php#option4"
    },
    {
        "value": "The greater impact",
        "label": "The greater impact - Food waste",
        "url": "introduction-to-food-waste-eng.php#option5"
    },
    {
        "value": "Steps to avoid food waste",
        "label": "Steps to avoid food waste - Food waste",
        "url": "introduction-to-food-waste-eng.php#option6"
    },
    {//food waste l4
        "value": "How to reduce food waste",
        "label": "How to reduce food waste - Food waste",
        "url": "explore-food-waste-eng.php#option1"
    },
    {
        "value": "Landfills should be the last place for food waste",
        "label": "Landfills should be the last place for food waste - Food waste",
        "url": "explore-food-waste-eng.php#option2"
    },
    {
        "value": "Good to know",
        "label": "Good to know - Food waste",
        "url": "explore-food-waste-eng.php#option3"
    },
    {
        "value": "Simple ways to prevent food waste",
        "label": "Simple ways to prevent food waste - Food waste",
        "url": "explore-food-waste-eng.php#option4"
    },
    {
        "value": "Advanced ways to reduce food waste",
        "label": "Advanced ways to reduce food waste - Food waste",
        "url": "explore-food-waste-eng.php#option5"
    },
    {
        "value": "Learn to make more out of food scraps",
        "label": "Learn to make more out of food scraps - Food waste",
        "url": "explore-food-waste-eng.php#option6"
    },
    {
        "value": "Track and talk about your progress",
        "label": "Track and talk about your progress - Food waste",
        "url": "explore-food-waste-eng.php#option7"
    },
    {
        "value": "Your action plan",
        "label": "Your action plan - Food waste",
        "url": "explore-food-waste-eng.php#option8"
    },
    {//plastic waste l3
        "value": "The role of plastic in gastronomy",
        "label": "The role of plastic in gastronomy - Plastic waste",
        "url": "introduction-to-plastic-waste-eng.php#option1"
    },
    {
        "value": "Did you know that...",
        "label": "Did you know that... - Plastic waste",
        "url": "introduction-to-plastic-waste-eng.php#option2"
    },
    {
        "value": "The big issue",
        "label": "The big issue - Plastic waste",
        "url": "introduction-to-plastic-waste-eng.php#option3"
    },
    {
        "value": "Your action plan",
        "label": "Your action plan - Plastic waste",
        "url": "introduction-to-plastic-waste-eng.php#option4"
    },
    {
        "value": "Benefits",
        "label": "Benefits - Plastic waste",
        "url": "introduction-to-plastic-waste-eng.php#option5"
    },
    {
        "value": "The greater impact",
        "label": "The greater impact - Plastic waste",
        "url": "introduction-to-plastic-waste-eng.php#option6"
    },
    {//plastic waste l4
        "value": "How to avoid plastic waste",
        "label": "How to avoid plastic waste - Plastic waste",
        "url": "explore-plastic-waste-eng.php#option1"
    },
    {
        "value": "How to prevent plastic waste",
        "label": "How to prevent plastic waste - Plastic waste",
        "url": "explore-plastic-waste-eng.php#option2"
    },
    {
        "value": "Simple waste audit",
        "label": "Simple waste audit - Plastic waste",
        "url": "explore-plastic-waste-eng.php#option3"
    },
    {
        "value": "Good to know",
        "label": "Simple waste audit - Plastic waste",
        "url": "explore-plastic-waste-eng.php#option4"
    },
    {
        "value": "Simple ways to prevent plastic waste",
        "label": "Simple ways to prevent plastic waste - Plastic waste",
        "url": "explore-plastic-waste-eng.php#option5"
    },
    {
        "value": "Advanced ways to save plastic waste",
        "label": "Advanced ways to save plastic waste - Plastic waste",
        "url": "explore-plastic-waste-eng.php#option6"
    },
    {
        "value": "Track and talk about your progress",
        "label": "Simple waste audit - Plastic waste",
        "url": "explore-plastic-waste-eng.php#option7"
    },
    {
        "value": "Your action plan",
        "label": "Your action plan - Plastic waste",
        "url": "explore-plastic-waste-eng.php#option8"
    },
    {//Safe food l3
        "value": "Why we need to talk about safe food",
        "label": "Why we need to talk about safe food - Safe food",
        "url": "introduction-to-safe-food-eng.php#option1"
    },
    {
        "value": "Did you know that...",
        "label": "Did you know that... - Safe food",
        "url": "introduction-to-safe-food-eng.php#option2"
    },
    {
        "value": "The big issue",
        "label": "The big issue - Safe food",
        "url": "introduction-to-safe-food-eng.php#option3"
    },
    {
        "value": "Benefits",
        "label": "Benefits - Safe food",
        "url": "introduction-to-safe-food-eng.php#option4"
    },
    {
        "value": "The greater impact",
        "label": "The greater impact - Safe food",
        "url": "introduction-to-safe-food-eng.php#option5"
    },
    {
        "value": "Steps to ensure safe food",
        "label": "Steps to ensure safe food - Safe food",
        "url": "introduction-to-safe-food-eng.php#option6"
    },
    {//Safe food l4
        "value": "How to ensure safe food",
        "label": "How to ensure safe food - Safe food",
        "url": "explore-safe-food-eng.php#option1"
    },
    {
        "value": "Good to know",
        "label": "Good to know - Safe food",
        "url": "explore-safe-food-eng.php#option2"
    },
    {
        "value": "Three steps to food safety",
        "label": "Three steps to food safety - Safe food",
        "url": "explore-safe-food-eng.php#option3"
    },
    {
        "value": "Track and talk about your progress",
        "label": "Track and talk about your progress - Safe food",
        "url": "explore-safe-food-eng.php#option4"
    },
    {
        "value": "Your action plan",
        "label": "Your action plan - Safe food",
        "url": "explore-safe-food-eng.php#option5"
    },
    {//Energy l3
        "value": "ow to use less energy in your restaurant and save cost",
        "label": "ow to use less energy in your restaurant and save cost - Energy",
        "url": "introduction-to-energy-eng.php#option1"
    },
    {
        "value": "Did you know that...",
        "label": "Did you know that... - Energy",
        "url": "introduction-to-energy-eng.php#option2"
    },
    {
        "value": "The big issue",
        "label": "The big issue - Energy",
        "url": "introduction-to-energy-eng.php#option3"
    },
    {
        "value": "Benefits",
        "label": "Benefits - Energy",
        "url": "introduction-to-energy-eng.php#option4"
    },
    {
        "value": "The greater impact",
        "label": "The greater impact - Energy",
        "url": "introduction-to-energy-eng.php#option5"
    },
    {
        "value": "Steps to reduce energy consumption",
        "label": "Steps to reduce energy consumption - Energy",
        "url": "introduction-to-energy-eng.php#option6"
    },
    { //energy l4
        "value": "How to use energy efficiently",
        "label": "How to use energy efficiently - Energy",
        "url": "explore-energy-eng.php#option1"
    },
    {
        "value": "Good to know",
        "label": "Good to know - Energy",
        "url": "explore-energy-eng.php#option2"
    },
    {
        "value": "Simple ways to save energy",
        "label": "Simple ways to save energy - Energy",
        "url": "explore-energy-eng.php#option3"
    },
    {
        "value": "Advanced ways to save energy",
        "label": "Advanced ways to save energy - Energy",
        "url": "explore-energy-eng.php#option4"
    },
    {
        "value": "Track and talk about your progress",
        "label": "Track and talk about your progress - Energy",
        "url": "explore-energy-eng.php#option5"
    },
    {
        "value": "Your action plan",
        "label": "Your action plan - Energy",
        "url": "explore-energy-eng.php#option6"
    },
    { //water l3
        "value": "How to save water in your restaurant",
        "label": "How to save water in your restaurant - Water",
        "url": "introduction-to-water-eng.php#option1"
    },
    { 
        "value": "Did you know that...",
        "label": "Did you know that... - Water",
        "url": "introduction-to-water-eng.php#optio2"
    },
    { 
        "value": "The big issue",
        "label": "The big issue - Water",
        "url": "introduction-to-water-eng.php#option3"
    },
    { 
        "value": "Benefits",
        "label": "Benefits - Water",
        "url": "introduction-to-water-eng.php#option4"
    },
    { 
        "value": "The greater impact",
        "label": "The greater impact - Water",
        "url": "introduction-to-water-eng.php#option5"
    },
    { 
        "value": "Steps to save water",
        "label": "Steps to save water - Water",
        "url": "introduction-to-water-eng.php#option6"
    },
    { //water l4
        "value": "How to use water responsibly",
        "label": "How to use water responsibly - Water",
        "url": "explore-water-eng.php#option1"
    },
    { 
        "value": "Good to know",
        "label": "Good to know - Water",
        "url": "explore-water-eng.php#option2"
    },
    { 
        "value": "Simple ways to save water",
        "label": "Simple ways to save water - Water",
        "url": "explore-water-eng.php#option3"
    },
    { 
        "value": "Advanced ways to save water",
        "label": "Advanced ways to save water - Water",
        "url": "explore-water-eng.php#option4"
    },
    { 
        "value": "Track and talk about your progress",
        "label": "Track and talk about your progress - Water",
        "url": "explore-water-eng.php#option5"
    },
    { 
        "value": "Your action plan",
        "label": "Your action plan - Water",
        "url": "explore-water-eng.php#option6"
    },
    { //waste
        "value": "The problem with waste",
        "label": "The problem with waste - Waste",
        "url": "introduction-to-waste-eng.php#option1"
    },
    { 
        "value": "Did you know that...",
        "label": "Did you know that... - Waste",
        "url": "introduction-to-waste-eng.php#option2"
    },
    { 
        "value": "The big issue",
        "label": "The big issue - Waste",
        "url": "introduction-to-waste-eng.php#option3"
    },
    { 
        "value": "Benefits",
        "label": "Benefits - Waste",
        "url": "introduction-to-waste-eng.php#option4"
    },
    { 
        "value": "The greater impact",
        "label": "The greater impact - Waste",
        "url": "introduction-to-waste-eng.php#option5"
    },
    { 
        "value": "Steps to reduce waste",
        "label": "Steps to reduce waste - Waste",
        "url": "introduction-to-waste-eng.php#option6"
    },
    { //waste l4
        "value": "How to use reduce waste",
        "label": "How to use reduce waste - Waste",
        "url": "explore-waste-eng.php#option1"
    },
    { 
        "value": "Good to know",
        "label": "Good to know - Waste",
        "url": "explore-waste-eng.php#option2"
    },
    { 
        "value": "Simple steps to start managing waste",
        "label": "Simple steps to start managing waste - Waste",
        "url": "explore-waste-eng.php#option3"
    },
    { 
        "value": "How to maximise sorting waste",
        "label": "How to maximise sorting waste - Waste",
        "url": "explore-waste-eng.php#option4"
    },
    { 
        "value": "Track and talk about your progress",
        "label": "Track and talk about your progress - Waste",
        "url": "explore-waste-eng.php#option5"
    },
    { 
        "value": "Your action plan",
        "label": "Your action plan - Waste",
        "url": "explore-waste-eng.php#option6"
    },
    { //social l3
        "value": "Why the gastronomy industry must engage socially",
        "label": "Why the gastronomy industry must engage socially - Social",
        "url": "introduction-to-social-eng.php#option1"
    },
    { 
        "value": "Did you know that...",
        "label": "Did you know that... - Social",
        "url": "introduction-to-social-eng.php#option2"
    },
    { 
        "value": "The big issue",
        "label": "The big issue - Social",
        "url": "introduction-to-social-eng.php#option3"
    },
    { 
        "value": "Benefits",
        "label": "Benefits - Social",
        "url": "introduction-to-social-eng.php#option4"
    },
    { 
        "value": "The greater impact",
        "label": "The greater impact - Social",
        "url": "introduction-to-social-eng.php#option5"
    },
    { 
        "value": "Steps to act socially",
        "label": "Steps to act socially - Social",
        "url": "introduction-to-social-eng.php#option6"
    },
    { //social l4
        "value": "How to engage socially as a restaurateur",
        "label": "How to engage socially as a restaurateur - Social",
        "url": "explore-social-eng.php#option1"
    },
    { 
        "value": "Good to know",
        "label": "Good to know - Social",
        "url": "explore-social-eng.php#option2"
    },
    { 
        "value": "The 7 Basic Human Rights",
        "label": "The 7 Basic Human Rights - Social",
        "url": "explore-social-eng.php#option3"
    },
    { 
        "value": "Ways to be socially engaged as a restaurateur",
        "label": "Ways to be socially engaged as a restaurateur - Social",
        "url": "explore-social-eng.php#option4"
    },
    { 
        "value": "Track and talk about your progress",
        "label": "Track and talk about your progress - Social",
        "url": "explore-social-eng.php#option5"
    },
    { 
        "value": "Your action plan",
        "label": "Your action plan - Social",
        "url": "explore-social-eng.php#option6"
    }
];

var jSearchDataDeu = [
    {//sustainable menu l3
        "value": "Warum es wichtig ist, ein nachhaltiges Menü anzubieten",
        "label": "Warum es wichtig ist, ein nachhaltiges Menü anzubieten - Nachhaltige Speisekarte ",
        "url": "introduction-to-sustainable-menu-deu.php#option1"
    },
    {
        "value": "Wussten Sie, dass…",
        "label": "Wussten Sie, dass… - Nachhaltige Speisekarte",
        "url": "introduction-to-sustainable-menu-deu.php#option2"
    },
    {
        "value": "Ein wichtiges Thema",
        "label": "Ein wichtiges Thema - Nachhaltige Speisekarte",
        "url": "introduction-to-sustainable-menu-deu.php#option3"
    },
    {
        "value": "Vorteile",
        "label": "Vorteile - Nachhaltige Speisekarte",
        "url": "introduction-to-sustainable-menu-deu.php#option4"
    },
    {
        "value": "Ein gesellschaftlicher Trend",
        "label": "Ein gesellschaftlicher Trend - Nachhaltige Speisekarte",
        "url": "introduction-to-sustainable-menu-deu.php#option5"
    },
    {
        "value": "Mit einfachen Schritten zur nachhaltigen Speisekarte",
        "label": "Mit einfachen Schritten zur nachhaltigen Speisekarte - Nachhaltige Speisekarte",
        "url": "introduction-to-sustainable-menu-deu.php#option6"
    },
    {//sustainable menu l4
        "value": "So wird Ihre Speisekarte nachhaltiger",
        "label": "So wird Ihre Speisekarte nachhaltiger - Nachhaltige Speisekarte",
        "url": "explore-sustainable-menu-deu.php#option1"
    },
    {
        "value": "Einfache Schritte, um eine nachhaltige Speisekarte zu erstellen",
        "label": "Einfache Schritte, um eine nachhaltige Speisekarte zu erstellen - Nachhaltige Speisekarte",
        "url": "explore-sustainable-menu-deu.php#option2"
    },
    {
        "value": "Gut zu wissen – Unterschiedliche Ernährungsformen",
        "label": "Gut zu wissen – Unterschiedliche Ernährungsformen - Nachhaltige Speisekarte",
        "url": "explore-sustainable-menu-deu.php#option3"
    },
    {
        "value": "Erfahren Sie alles über die Diversifizierung von Proteinen",
        "label": "Erfahren Sie alles über die Diversifizierung von Proteinen - Nachhaltige Speisekarte",
        "url": "explore-sustainable-menu-deu.php#option4"
    },
    {
        "value": "Heben Sie nachhaltige Gerichte hervor",
        "label": "Heben Sie nachhaltige Gerichte hervor - Nachhaltige Speisekarte",
        "url": "explore-sustainable-menu-deu.php#option5"
    },
    {
        "value": "LENAS KÜCHE",
        "label": "LENAS KÜCHE - Sustainable menu",
        "url": "explore-sustainable-menu-deu.php#option6"
    },
    {
        "value": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber",
        "label": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber - Nachhaltige Speisekarte",
        "url": "explore-sustainable-menu-deu.php#option7"
    },
    {
        "value": "Ihr Aktionsplan",
        "label": "Ihr Aktionsplan - Nachhaltige Speisekarte",
        "url": "explore-sustainable-menu-deu.php#option8"
    },
    {//responsible sourcing l3
        "value": "Wie man Produkte für Restaurants verantwortungsbewusst einkauft",
        "label": "Wie man Produkte für Restaurants verantwortungsbewusst einkauft - Verantwortungsbewusstes Einkaufen ",
        "url": "introduction-to-responsible-sourcing-deu.php#option1"
    },
    {
        "value": "Wussten Sie, dass…",
        "label": "Wussten Sie, dass… - Verantwortungsbewusstes Einkaufen ",
        "url": "introduction-to-responsible-sourcing-deu.php#option2"
    },
    {
        "value": "Ein wichtiges Thema",
        "label": "Ein wichtiges Thema - Verantwortungsbewusstes Einkaufen ",
        "url": "introduction-to-responsible-sourcing-deu.php#option3"
    },
    {
        "value": "Vorteile",
        "label": "Vorteile - Verantwortungsbewusstes Einkaufen ",
        "url": "introduction-to-responsible-sourcing-deu.php#option4"
    },
    {
        "value": "Ein gesellschaftlicher Trend",
        "label": "Ein gesellschaftlicher Trend - Verantwortungsbewusstes Einkaufen ",
        "url": "introduction-to-responsible-sourcing-deu.php#option5"
    },
    {
        "value": "Erste Schritte, wie Sie verantwortungsbewusst einkaufen",
        "label": "Erste Schritte, wie Sie verantwortungsbewusst einkaufen - Verantwortungsbewusstes Einkaufen ",
        "url": "introduction-to-responsible-sourcing-deu.php#option6"
    },
    {//responsible sourcing l4
        "value": "Wie Sie verantwortungsbewusst einkaufen",
        "label": "Wie Sie verantwortungsbewusst einkaufen - Verantwortungsbewusstes Einkaufen ",
        "url": "explore-responsible-sourcing-deu.php#option1"
    },
    {
        "value": "Die Bedeutung eines verantwortungsbewussten Einkaufs",
        "label": "Die Bedeutung eines verantwortungsbewussten Einkaufs - Verantwortungsbewusstes Einkaufen ",
        "url": "explore-responsible-sourcing-deu.php#option2"
    },
    {
        "value": "Gut zu wissen – Siegel und Zertifizierungen können Ihnen helfen, Ihren Weg zu gehen",
        "label": "Gut zu wissen – Siegel und Zertifizierungen können Ihnen helfen, Ihren Weg zu gehen",
        "url": "explore-responsible-sourcing-deu.php#option3"
    },
    {
        "value": "Nicht-zertifizierte nachhaltige Produkte",
        "label": "Nicht-zertifizierte nachhaltige Produkte - Verantwortungsbewusstes Einkaufen ",
        "url": "explore-responsible-sourcing-deu.php#option4"
    },
    {
        "value": "Der umfassende Leitfaden für nachhaltige Produkte",
        "label": "Der umfassende Leitfaden für nachhaltige Produkte - Verantwortungsbewusstes Einkaufen ",
        "url": "explore-responsible-sourcing-deu.php#option5"
    },
    {
        "value": "Tipps für Einsteiger, um verantwortungsbewusst Einzukaufen",
        "label": "Tipps für Einsteiger, um verantwortungsbewusst Einzukaufen - Verantwortungsbewusstes Einkaufen ",
        "url": "explore-responsible-sourcing-deu.php#option6"
    },
    {
        "value": "Tipps für Fortgeschrittene, um verantwortungsbewusst einzukaufen",
        "label": "Tipps für Fortgeschrittene, um verantwortungsbewusst einzukaufen - Verantwortungsbewusstes Einkaufen ",
        "url": "explore-responsible-sourcing-deu.php#option7"
    },
    {
        "value": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber",
        "label": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber - Verantwortungsbewusstes Einkaufen ",
        "url": "explore-responsible-sourcing-deu.php#option8"
    },
    {
        "value": "Ihr Aktionsplan",
        "label": "Ihr Aktionsplan - Verantwortungsbewusstes Einkaufen ",
        "url": "explore-responsible-sourcing-deu.php#option9"
    },
    {//food waste l3
        "value": "Warum wir die Menge an Lebensmittelabfällen reduzieren müssen",
        "label": "Warum wir die Menge an Lebensmittelabfällen reduzieren müssen - Lebensmittelverluste",
        "url": "introduction-to-food-waste-deu.php#option1"
    },
    {
        "value": "Wussten Sie, dass…",
        "label": "Wussten Sie, dass… - Lebensmittelverluste",
        "url": "introduction-to-food-waste-deu.php#option2"
    },
    {
        "value": "Ein wichtiges Thema",
        "label": "Ein wichtiges Thema - Lebensmittelverluste",
        "url": "introduction-to-food-waste-deu.php#option3"
    },
    {
        "value": "Vorteile",
        "label": "Vorteile - Lebensmittelverluste",
        "url": "introduction-to-food-waste-deu.php#option4"
    },
    {
        "value": "Ein gesellschaftlicher Trend",
        "label": "Ein gesellschaftlicher Trend - Lebensmittelverluste",
        "url": "introduction-to-food-waste-deu.php#option5"
    },
    {
        "value": "Erste Schritte, wie Sie die Menge an Lebensmittelabfällen verringern",
        "label": "Erste Schritte, wie Sie die Menge an Lebensmittelabfällen verringern - Lebensmittelverluste",
        "url": "introduction-to-food-waste-deu.php#option6"
    },
    {//food waste l4
        "value": "Wie Sie Lebensmittelabfälle reduzieren",
        "label": "Wie Sie Lebensmittelabfälle reduzieren - Lebensmittelverluste ",
        "url": "explore-food-waste-deu.php#option1"
    },
    {
        "value": "Mülldeponien sollten der letzte Ort sein, auf dem nicht benötigte Lebensmittel landen",
        "label": "Mülldeponien sollten der letzte Ort sein, auf dem nicht benötigte Lebensmittel landen - Lebensmittelverluste ",
        "url": "explore-food-waste-deu.php#option2"
    },
    {
        "value": "Gut zu wissen",
        "label": "Gut zu wissen - Lebensmittelverluste ",
        "url": "explore-food-waste-deu.php#option3"
    },
    {
        "value": "Tipps für Einsteiger, um Lebensmittelabfälle zu reduzieren",
        "label": "Tipps für Einsteiger, um Lebensmittelabfälle zu reduzieren - Lebensmittelverluste ",
        "url": "explore-food-waste-deu.php#option4"
    },
    {
        "value": "Tipps für Fortgeschrittene, um die Menge an Lebensmittelabfällen zu reduzieren",
        "label": "Tipps für Fortgeschrittene, um die Menge an Lebensmittelabfällen zu reduzieren - Lebensmittelverluste ",
        "url": "explore-food-waste-deu.php#option5"
    },
    {
        "value": "Kompostieren Sie Lebensmittelabfälle",
        "label": "Kompostieren Sie Lebensmittelabfälle - Lebensmittelverluste ",
        "url": "explore-food-waste-deu.php#option6"
    },
    {
        "value": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber",
        "label": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber - Lebensmittelverluste ",
        "url": "explore-food-waste-deu.php#option7"
    },
    {
        "value": "Ihr Aktionsplan",
        "label": "Ihr Aktionsplan - Lebensmittelverluste ",
        "url": "explore-food-waste-deu.php#option8"
    },
    {//plastic waste l3
        "value": "Die Bedeutung von Plastik in der Gastronomie",
        "label": "Die Bedeutung von Plastik in der Gastronomie - Plastikmüll",
        "url": "introduction-to-plastic-waste-deu.php#option1"
    },
    {
        "value": "Wussten Sie, dass…",
        "label": "Wussten Sie, dass… - Plastikmüll",
        "url": "introduction-to-plastic-waste-deu.php#option2"
    },
    {
        "value": "Ein wichtiges Thema",
        "label": "Ein wichtiges Thema - Plastikmüll",
        "url": "introduction-to-plastic-waste-deu.php#option3"
    },
    {
        "value": "Vorteile",
        "label": "Vorteile - Plastikmüll",
        "url": "introduction-to-plastic-waste-deu.php#option4"
    },
    {
        "value": "Ein gesellschaftlicher Trend",
        "label": "Ein gesellschaftlicher Trend - Plastikmüll ",
        "url": "introduction-to-plastic-waste-deu.php#option5"
    },
    {
        "value": "Erste Schritte, wie Sie Plastikmüll reduzieren",
        "label": "Erste Schritte, wie Sie Plastikmüll reduzieren - Plastikmüll ",
        "url": "introduction-to-plastic-waste-deu.php#option6"
    },
    {//plastic waste l4
        "value": "Wie Sie Plastikmüll vermeiden",
        "label": "Wie Sie Plastikmüll vermeiden - Plastikmüll ",
        "url": "explore-plastic-waste-deu.php#option1"
    },
    {
        "value": "Plastikmüll in der Gastronomie",
        "label": "Plastikmüll in der Gastronomie - Plastikmüll ",
        "url": "explore-plastic-waste-deu.php#option2"
    },
    {
        "value": "Wie Sie Plastikmüll vermeiden",
        "label": "Wie Sie Plastikmüll vermeiden - Plastikmüll ",
        "url": "explore-plastic-waste-deu.php#option3"
    },
    {
        "value": "Gut zu wissen",
        "label": "Simple waste audit - Plastikmüll ",
        "url": "explore-plastic-waste-deu.php#option4"
    },
    {
        "value": "Tipps für Einsteiger, um Plastikmüll zu vermeiden",
        "label": "Tipps für Einsteiger, um Plastikmüll zu vermeiden - Plastikmüll ",
        "url": "explore-plastic-waste-deu.php#option5"
    },
    {
        "value": "Tipps für Fortgeschrittene, um Plastikmüll zu vermeiden",
        "label": "Tipps für Fortgeschrittene, um Plastikmüll zu vermeiden - Plastikmüll ",
        "url": "explore-plastic-waste-deu.php#option6"
    },
    {
        "value": "Überprüfen Sie ihre Fortschritte und sprechen Sie darüber",
        "label": "Überprüfen Sie ihre Fortschritte und sprechen Sie darüber - Plastikmüll ",
        "url": "explore-plastic-waste-deu.php#option7"
    },
    {
        "value": "Ihr Aktionsplan",
        "label": "Ihr Aktionsplan - Plastikmüll ",
        "url": "explore-plastic-waste-deu.php#option8"
    },
    {//Safe food l3
        "value": "Warum wir über Lebensmittelsicherheit sprechen müssen",
        "label": "Warum wir über Lebensmittelsicherheit sprechen müssen - Lebensmittelsicherheit ",
        "url": "introduction-to-safe-food-deu.php#option1"
    },
    {
        "value": "Wussten Sie, dass…",
        "label": "Wussten Sie, dass… - Lebensmittelsicherheit ",
        "url": "introduction-to-safe-food-deu.php#option2"
    },
    {
        "value": "TEin wichtiges Thema",
        "label": "Ein wichtiges Thema - Lebensmittelsicherheit ",
        "url": "introduction-to-safe-food-deu.php#option3"
    },
    {
        "value": "Vorteile",
        "label": "Vorteile - Lebensmittelsicherheit ",
        "url": "introduction-to-safe-food-eng.php#option4"
    },
    {
        "value": "Ein gesellschaftlicher Trend",
        "label": "Ein gesellschaftlicher Trend - Lebensmittelsicherheit ",
        "url": "introduction-to-safe-food-deu.php#option5"
    },
    {
        "value": "Erste Schritte, wie Sie Lebensmittelsicherheit sicherstellen",
        "label": "Erste Schritte, wie Sie Lebensmittelsicherheit sicherstellen - Lebensmittelsicherheit ",
        "url": "introduction-to-safe-food-deu.php#option6"
    },
    {//Safe food l4
        "value": "Lebensmittelsicherheit ist die Basis",
        "label": "Lebensmittelsicherheit ist die Basis - Lebensmittelsicherheit ",
        "url": "explore-safe-food-deu.php#option1"
    },
    {
        "value": "Gut zu wissen",
        "label": "Gut zu wissen - Lebensmittelsicherheit ",
        "url": "explore-safe-food-deu.php#option2"
    },
    {
        "value": "Drei Schritte für mehr Lebensmittelsicherheit",
        "label": "Drei Schritte für mehr Lebensmittelsicherheit - Lebensmittelsicherheit ",
        "url": "explore-safe-food-deu.php#option3"
    },
    {
        "value": "Überprüfen Sie Ihre Fortschritte und reden Sie darüber",
        "label": "Überprüfen Sie Ihre Fortschritte und reden Sie darüber - Lebensmittelsicherheit ",
        "url": "explore-safe-food-deu.php#option4"
    },
    {
        "value": "Ihr Aktionsplan",
        "label": "Ihr Aktionsplan - Lebensmittelsicherheit ",
        "url": "explore-safe-food-deu.php#option5"
    },
    {//Energy l3
        "value": "Wie Sie in Ihrem Restaurant weniger Energie verbrauchen und damit Kosten sparen",
        "label": "Wie Sie in Ihrem Restaurant weniger Energie verbrauchen und damit Kosten sparen - Energie",
        "url": "introduction-to-energy-deu.php#option1"
    },
    {
        "value": "Wussten Sie, dass…",
        "label": "Wussten Sie, dass… - Energie",
        "url": "introduction-to-energy-deu.php#option2"
    },
    {
        "value": "Ein wichtiges Thema",
        "label": "Ein wichtiges Thema - Energie",
        "url": "introduction-to-energy-deu.php#option3"
    },
    {
        "value": "Vorteile",
        "label": "Vorteile - Energie",
        "url": "introduction-to-energy-deu.php#option4"
    },
    {
        "value": "Ein gesellschaftlicher Trend",
        "label": "Ein gesellschaftlicher Trend - Energie",
        "url": "introduction-to-energy-deu.php#option5"
    },
    {
        "value": "Erste Schritte, wie Sie den Energieverbrauch senken",
        "label": "Erste Schritte, wie Sie den Energieverbrauch senken - Energie",
        "url": "introduction-to-energy-deu.php#option6"
    },
    { //energy l4
        "value": "Wie man Energie effizient nutzt",
        "label": "Wie man Energie effizient nutzt - Energie",
        "url": "explore-energy-deu.php#option1"
    },
    {
        "value": "Gut zu wissen",
        "label": "Gut zu wissen - Energie",
        "url": "explore-energy-deu.php#option2"
    },
    {
        "value": "Tipps für Einsteiger, um Energie zu sparen",
        "label": "Tipps für Einsteiger, um Energie zu sparen - Energie",
        "url": "explore-energy-deu.php#option3"
    },
    {
        "value": "Tipps für Fortgeschrittene, um Energie zu sparen",
        "label": "Tipps für Fortgeschrittene, um Energie zu sparen - Energie",
        "url": "explore-energy-deu.php#option4"
    },
    {
        "value": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber",
        "label": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber - Energie",
        "url": "explore-energy-deu.php#option5"
    },
    {
        "value": "Ihr Aktionsplan",
        "label": "Ihr Aktionsplan - Energie",
        "url": "explore-energy-deu.php#option6"
    },
    { //water l3
        "value": "Wie Sie in Ihrem Restaurant Wasser sparen können",
        "label": "Wie Sie in Ihrem Restaurant Wasser sparen können - Wasser",
        "url": "introduction-to-water-deu.php#option1"
    },
    { 
        "value": "Wussten Sie, dass…",
        "label": "Wussten Sie, dass… - Wasser",
        "url": "introduction-to-water-deu.php#optio2"
    },
    { 
        "value": "Ein wichtiges Thema",
        "label": "Ein wichtiges Thema - Wasser",
        "url": "introduction-to-water-deu.php#option3"
    },
    { 
        "value": "Vorteile",
        "label": "Vorteile - Wasser",
        "url": "introduction-to-water-deu.php#option4"
    },
    { 
        "value": "Ein gesellschaftlicher TrendThe greater impact",
        "label": "Ein gesellschaftlicher Trend - Wasser",
        "url": "introduction-to-water-deu.php#option5"
    },
    { 
        "value": "Erste Schritte, wie Sie Wasser sparen",
        "label": "Erste Schritte, wie Sie Wasser sparen - Wasser",
        "url": "introduction-to-water-deu.php#option6"
    },
    { //water l4
        "value": "Wie man Wasser verantwortungsvoll nutzt",
        "label": "Wie man Wasser verantwortungsvoll nutzt - Wasser",
        "url": "explore-water-deu.php#option1"
    },
    { 
        "value": "Gut zu wissen",
        "label": "Gut zu wissen - Wasser",
        "url": "explore-water-deu.php#option2"
    },
    { 
        "value": "Tipps für Einsteiger, um Wasser zu sparen",
        "label": "Tipps für Einsteiger, um Wasser zu sparen - Wasser",
        "url": "explore-water-deu.php#option3"
    },
    { 
        "value": "Tipps für Fortgeschrittene, um Wasser zu sparen",
        "label": "Tipps für Fortgeschrittene, um Wasser zu sparen - Wasser",
        "url": "explore-water-deu.php#option4"
    },
    { 
        "value": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber",
        "label": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber - Wasser",
        "url": "explore-water-deu.php#option5"
    },
    { 
        "value": "Ihr Aktionsplan",
        "label": "Ihr Aktionsplan - Wasser",
        "url": "explore-water-deu.php#option6"
    },
    { //waste l3
        "value": "Das Problem mit dem Abfall",
        "label": "Das Problem mit dem Abfall - Abfälle ",
        "url": "introduction-to-waste-deu.php#option1"
    },
    { 
        "value": "Wussten Sie, dass…",
        "label": "Wussten Sie, dass… - Abfälle",
        "url": "introduction-to-waste-deu.php#option2"
    },
    { 
        "value": "Ein wichtiges Thema",
        "label": "Ein wichtiges Thema - Abfälle",
        "url": "introduction-to-waste-deu.php#option3"
    },
    { 
        "value": "Vorteile",
        "label": "Vorteile - Abfälle",
        "url": "introduction-to-waste-deu.php#option4"
    },
    { 
        "value": "Ein gesellschaftlicher Trend",
        "label": "Ein gesellschaftlicher Trend - Abfälle",
        "url": "introduction-to-waste-deu.php#option5"
    },
    { 
        "value": "Erste Schritte, wie Sie Abfall vermeiden",
        "label": "Erste Schritte, wie Sie Abfall vermeiden - Waste",
        "url": "introduction-to-waste-deu.php#option6"
    },
    { //waste l4
        "value": "Wie man Abfall reduziert",
        "label": "Wie man Abfall reduziert - Abfälle",
        "url": "explore-waste-deu.php#option1"
    },
    { 
        "value": "Gut zu wissen",
        "label": "Gut zu wissen - Gemeinschaft ",
        "url": "explore-waste-deu.php#option2"
    },
    { 
        "value": "Tipps für Einsteiger, um weniger Abfall zu produzieren",
        "label": "Tipps für Einsteiger, um weniger Abfall zu produzieren - Gemeinschaft ",
        "url": "explore-waste-deu.php#option3"
    },
    { 
        "value": "Wie Sie das Beste aus Ihrem Abfall herausholen",
        "label": "Wie Sie das Beste aus Ihrem Abfall herausholen - Gemeinschaft ",
        "url": "explore-waste-deu.php#option4"
    },
    { 
        "value": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber",
        "label": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber - Gemeinschaft ",
        "url": "explore-waste-deu.php#option5"
    },
    { 
        "value": "Ihr Aktionsplan",
        "label": "Ihr Aktionsplan - Gemeinschaft ",
        "url": "explore-waste-deu.php#option6"
    },
    { //social l3
        "value": "Warum sich das Gastgewerbe sozial engagieren muss",
        "label": "Warum sich das Gastgewerbe sozial engagieren muss - Gemeinschaft ",
        "url": "introduction-to-social-deu.php#option1"
    },
    { 
        "value": "Wussten Sie, dass…",
        "label": "Wussten Sie, dass… - Gemeinschaft ",
        "url": "introduction-to-social-deu.php#option2"
    },
    { 
        "value": "Ein wichtiges Thema",
        "label": "Ein wichtiges Thema - Gemeinschaft ",
        "url": "introduction-to-social-deu.php#option3"
    },
    { 
        "value": "Vorteile",
        "label": "Vorteile - Gemeinschaft ",
        "url": "introduction-to-social-deu.php#option4"
    },
    { 
        "value": "Ein gesellschaftlicher Trend",
        "label": "Ein gesellschaftlicher Trend - Gemeinschaft ",
        "url": "introduction-to-social-deu.php#option5"
    },
    { 
        "value": "Erste Schritte, wie Sie sozial handeln",
        "label": "Erste Schritte, wie Sie sozial handeln - Gemeinschaft ",
        "url": "introduction-to-social-deu.php#option6"
    },
    { //social l4
        "value": "Wie Sie sich als Gastronomiebetreibende sozial engagieren können",
        "label": "Wie Sie sich als Gastronomiebetreibende sozial engagieren können - Gemeinschaft ",
        "url": "explore-social-deu.php#option1"
    },
    { 
        "value": "Gut zu wissen",
        "label": "Gut zu wissen - Gemeinschaft ",
        "url": "explore-social-deu.php#option2"
    },
    { 
        "value": "Die 7 Grundrechte",
        "label": "Die 7 Grundrechte - Gemeinschaft ",
        "url": "explore-social-deu.php#option3"
    },
    { 
        "value": "Wege, um sich als Gastronomin oder Gastronom sozial zu engagieren",
        "label": "Wege, um sich als Gastronomin oder Gastronom sozial zu engagieren - Gemeinschaft ",
        "url": "explore-social-deu.php#option4"
    },
    { 
        "value": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber",
        "label": "Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber - Gemeinschaft ",
        "url": "explore-social-deu.php#option5"
    },
    { 
        "value": "Ihr Aktionsplan",
        "label": "Ihr Aktionsplan - Gemeinschaft ",
        "url": "explore-social-deu.php#option6"
    }
];

//scroll option manipulation
 $.fn.is_on_screen = function() {
    var win = $(window);
    var viewport = {
        top: win.scrollTop()+100,
        left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();

    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();

    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};
$(window).scroll(function() {
    if ($('#option1').is_on_screen()) { 
        $('.dynamic9').text($('#option1').attr("data-scrl"));
    } else if ($('#option2').is_on_screen()) {
        $('.dynamic9').text($('#option2').attr("data-scrl"));
    } else if ($('#option3').is_on_screen()) { 
        $('.dynamic9').text($('#option3').attr("data-scrl"));
    } else if ($('#option4').is_on_screen()) { 
        $('.dynamic9').text($('#option4').attr("data-scrl"));
    } else if ($('#option5').is_on_screen()) { 
        $('.dynamic9').text($('#option5').attr("data-scrl"));
    } else if ($('#option6').is_on_screen()) {
        $('.dynamic9').text($('#option6').attr("data-scrl"));
    } else if ($('#option7').is_on_screen()) {
        $('.dynamic9').text($('#option7').attr("data-scrl"));
    } else if ($('#option8').is_on_screen()) {
        $('.dynamic9').text($('#option8').attr("data-scrl"));
    } else if ($('#option9').is_on_screen()) { 
        $('.dynamic9').text($('#option9').attr("data-scrl"));
    }
});