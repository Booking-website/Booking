<?php
include_once '../php/header.php';
?>

<head>
  <!-- Style -->
  <link rel="stylesheet" href="../css/master.css">
  <title>Flying</title>
</head>

 <!--
   TODO LIST:
   8. ADD EVERYWHERE HEADER AND FOOTER;

   1. Wrap all form except button.searchButton in div to make it's display grid better for button;//
   2. Create some pages for cards and link them together, to make content;
   3. Realize bank card, update/onchange send mb;
   4. Make design for Profile page;//
   5. Finish JS function to make correct date in date in main page;//
   6. Finish 5th card in main page//
   7. Finish footer links;
 -->


<header class="header" id="header">
 <div class="container">
   <div class="flights">
     <div class="container">
       <div class="flight">
         <i class="fa fa-plane fa-xs"></i>
         <h2>Flights</h2>
       </div>
     </div>
     <div class="container">
       <div class="ways" id="ways">
         <div><h3><a id="one_way">One-way</a></h3></div>
       </div>
         <div class="one-way">
           <form action="available.flights.php" method="post">
             <select name="from_city" required>
               <option value="">From city</option>
               <option value="nur-sultan">Nur-Sultan</option>
               <option value="almaty">Almaty</option>
               <option value="taraz">Taraz</option>
             </select>
             <select name="to_city" required>
               <option value="">To city</option>
               <option value="nur-sultan">Nur-Sultan</option>
               <option value="almaty">Almaty</option>
               <option value="taraz">Taraz</option>
             </select>
             <input type="date" name="from_date" id="from_date" required>
             <select class="one-way__flight-class" name="class">
               <option value="economy">
                 Economy
               </option>
               <option value="business">
                 Business
               </option>
             </select>
             <button class="searchButton" type="submit" name="search">
               Search tickets
             </button>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
</header>

<main class="main" id="main">
  <div class="container">
    <h2>Popular places to travel in Kazakhstan</h2>
    <div class="part1">
      <div class="card1">
        <a>
          <div class="top">
            <h3>Nur-Sultan</h3>
          </div>
          <div class="bottom">
            <p>Capital city of Kazakhstan.</p>
          </div>
        </a>
      </div>
      <div class="popup p1c1_popup">
        <div class="popupWrapper">
          <div class="popupContentWrapper">
            <div class="popupTextWrapper">
              <h2>
                Nur-Sultan <i>(was Astana)</i>
              </h2>
              <p>
                Nūr-Sūltan (/ˌnʊərsʊlˈtɑːn/;[8] Kazakh pronunciation: [nʊɾ sʊltɑn]; Cyrillic: Нұр-Сұлтан) is the capital city of Kazakhstan. It was known between 1998 and 2019 as Astana[a] (Kazakh pronunciation: [ɑstɑnɑ], Cyrillic: Астана) and before that as Akmola. On 23 March 2019, following an unanimous vote in Kazakhstan's parliament, the city was renamed to Nur-Sultan, after former Kazakhstani President Nursultan Nazarbayev.
              </p>
              <p>
                The city lies on the banks of the Ishim River in the north-central part of Kazakhstan, within the Akmola Region, though administered as a city with special status separately from the rest of the region. A 2020 official estimate reported a population of 1,136,008 within the city limits, making it the second-largest city in the country, after Almaty, which had been the capital until 1997.[3] Akmola became the capital of Kazakhstan in 1997, since then it has grown and developed economically into one of the most modern cities in Central Asia.[15][16]
              </p>
              <p>
                Modern Nur-Sultan is a planned city, following the process of other planned capitals.[17] After it became the capital of Kazakhstan, the city dramatically changed its shape. The city's master-plan was designed by Japanese architect Kisho Kurokawa.[17] As the seat of the government of Kazakhstan, Nur-Sultan is the site of the Parliament House, the Supreme Court, the Ak Orda Presidential Palace and numerous government departments and agencies. It is home to a range of futuristic buildings, including many skyscrapers.
              </p>
              <h4>Names</h4>
              <p>
                The settlement was founded in 1830 as Akmoly or Akmolinsky prikaz (Russian: Акмолинский приказ "prikaz [office] of Akmoly"). This name was possibly given after a local landmark—Akmola literally means "white grave" or "holy city" in Kazakh—although this theory is not universally accepted.[2] In 1832, it was granted town status and renamed Akmolinsk (Russian: Акмолинск).[2] During the Soviet era on 20 March 1961, it was renamed to Tselinograd (Russian: Целиноград, lit. 'City of virgin lands') to mark its evolution as a cultural and administrative center of the Virgin Lands campaign.[21][2] In 1992, after Kazakh independence Tselinograd adopted the presumed original name Akmola.[2][22] On 10 December 1997, Akmola replaced Almaty as the capital of Kazakhstan. On 6 May 1998, it was renamed to Astana, which means "capital city" in Kazakh.[23] On 20 March 2019, the capital was renamed from Astana to its current name Nur-Sultan in honor of the long-ruling Kazakh President Nursultan Nazarbayev, shortly after his resignation.[24][25] Nur-Sultan (нұр-сұлтан) can be read literally as "radiant sultan" in the Kazakh language.
              </p>
              <h4>Topography</h4>
              <p>
                Nur-Sultan (Astana) is located in central Kazakhstan on the Ishim River in a very flat, semi-arid steppe region which covers most of the country's territory. It is at 51° 10' north latitude and 71° 26' east longitude. The city encompasses 722.0 square kilometres (278.8 sq mi). The elevation of Nur-Sultan (Astana) is 347 metres (1,138 ft) above sea level. Nur-Sultan is in a spacious steppe landscape, in the transitional area between the north of Kazakhstan and the extremely thinly settled national centre, because of the Ishim River. The older boroughs lie north of the river, whilst the new boroughs are located south of the Ishim.
              </p>
              <h4>Climate</h4>
              <p>
                Nur-Sultan is the second-coldest national capital in the world after Ulaanbaatar, Mongolia, a position formerly held by Canada's capital, Ottawa, until Nur-Sultan attained capital city status in 1997.[43][44] Nur-Sultan has an extreme continental climate with warm summers (featuring occasional brief rain showers) and long, very cold, dry winters. Summer temperatures occasionally reach 35 °C (95 °F) while −30 to −35 °C (−22 to −31 °F) is not unusual between mid-December and early March. Typically, the city's river is frozen over between the second week of November and the beginning of April. Nur-Sultan has a well-deserved reputation among Kazakhs for its frequent high winds, the effects of which are felt particularly strongly on the fast-developing but relatively exposed Left Bank area of the city.
              </p>
            </div>
            <h4>Photo Gallery</h4>
            <div class="popupGalleryWrapper">
              <img src="../img/cardImgs/nur1.jpg" alt="">
              <img src="../img/cardImgs/nur2.jpg" alt="">
              <img src="../img/cardImgs/nur3.jfif" alt="">
              <img src="../img/cardImgs/nur4.jfif" alt="">
            </div>
          </div>
          <div class="closeButtonWrapper">
            <button type="close" name="closePopup" id="closePopup"><i class="fa fa-times"></i> Close window</button>
          </div>
        </div>
      </div>
      <div class="card2">
        <a>
          <div class="top">
            <h3>Almaty</h3>
          </div>
          <div class="bottom">
            <p>
              With a lot of natural attractions.
            </p>
          </div>
        </a>
      </div>
      <div class="popup p1c2_popup">
        <div class="popupWrapper">
          <div class="popupContentWrapper">
            <div class="popupTextWrapper">
              <h2>
                Almaty
                <br>
                <i>Kazakhstan</i>
              </h2>
              <h4>Overall view</h4>
              <p>
                Almaty (/ˈælməti/; Kazakh pronunciation: [ɑlmɑˈtə]; Cyrillic: Алматы), formerly known as Alma-Ata and Verny (Russian: Верный), is the largest city in Kazakhstan, with a population of about 2,000,000 people, about 11% of the country's total population,[5] and more than 2.7 million in its built-up area that encompasses Talgar, Boraldai, Otegen Batyr and many other suburbs. It served as capital of the Kazakh Soviet Socialist Republic and later independent Kazakhstan from 1929 to 1997.[6] In 1997, the government relocated the capital to Akmola (renamed Astana in 1998, later renamed Nur-Sultan in 2019) in the north of the country.
              </p>
              <p>
                Almaty is still the major commercial and cultural centre of Kazakhstan, as well as its most populous and most cosmopolitan city.[7] The city is located in the mountainous area of southern Kazakhstan near the border with Kyrgyzstan in the foothills of the Trans-Ili Alatau at an elevation of 700–900 m (2,300–3,000 feet), where the Large and Small Almatinka rivers run into the plain.
              </p>
              <p>
                The city has been part of the UNESCO Creative Cities Network in the area of music since November 2017.[9] The city was the host for a 1978 international conference on Primary Health Care where the Alma Ata Declaration was adopted, marking a paradigm shift in global public health.
              </p>
              <h4>Status</h4>
              <p>
                From 1929 to 1936, Almaty was the capital of the Kazakh ASSR. From 1936 to 1991 it was the capital of the Kazakh SSR. After Kazakhstan became independent in 1991, Almaty continued as the capital until 1997, when Astana (renamed to Nur-Sultan in 2019) was designated a return to the historic capital.
              </p>
              <p>
                Almaty remains the largest, most developed, and most ethnically and culturally diverse city in Kazakhstan. Due to development by the Soviet Union and relocation of workers and industries from European areas of the Soviet Union during World War II, the city has a high proportion of ethnic Russians and Ukrainians. The city lies in the foothills of Trans-Ili Alatau (or Zailiysky Alatau) in the extreme south-east.
              </p>
              <p>
                It has a relatively mild climate with warm and dry summers and quite cold winters. Since the city is in a tectonically active area, it has an endemic risk of earthquakes. Although most tremors do not cause any significant damage, Almaty has suffered some large destructive earthquakes.
              </p>
              <p>
                In 1997 the capital was moved to Astana (renamed to Nur-Sultan in 2019) in the north-central part of the country. Since then Almaty has been referred to as the 'southern capital' of Kazakhstan.
              </p>
              <h4>Etymology</h4>
              <p>
                The name Almaty has its roots in the medieval settlement Almatu, that existed near the present-day city.[10] A disputed theory holds that the name is derived from the Kazakh word for 'apple' (алма), and is often translated as "full of apples". Originally it was Almatau which means Apple Mountain. The Russian version of the name was Alma-Ata (Kaz. Father of Apples). Since gaining its independence from the Soviet Union, the use of the Kazakh Almaty is accepted.
              </p>
              <p>
                There is great genetic diversity among the wild apples in the region surrounding Almaty; the region is thought to be the apple's ancestral home. The wild Malus sieversii is considered a likely candidate for the ancestor of the modern domestic apple.
              </p>
              <p>
                The city's name was written as آلماتی Ālmātī in Persian and Urdu written with the Perso-Arabic script.
              </p>
            </div>
            <h4>Photo Gallery</h4>
            <div class="popupGalleryWrapper">
              <img src="../img/cardImgs/alma1.jpg" alt="">
              <img src="../img/cardImgs/alma2.jpg" alt="">
              <img src="../img/cardImgs/alma3.jpg" alt="">
            </div>
          </div>
          <div class="closeButtonWrapper">
            <button type="close" name="closePopup" id="closePopup"><i   class="fa fa-times"></i> Close window</button>
          </div>
        </div>
      </div>
      <div class="card3">
        <a>
          <div class="top">
            <h3>Taraz</h3>
          </div>
          <div class="bottom">
            <p>
              One of the oldest cities in Kazakhstan.
            </p>
          </div>
        </a>
      </div>
      <div class="popup p1c3_popup">
        <div class="popupWrapper">
          <div class="popupContentWrapper">
            <div class="popupTextWrapper">
              <h2>
                Taraz
                <br>
                <i>Kazakhstan</i>
              </h2>
              <h4>Overall view</h4>
              <p>
                Taraz (Kazakh: Тараз, romanized: Taraz; known to Europeans as Talas) is a city and the administrative center of Jambyl Region in Kazakhstan, located on the Talas (Taraz) River in the south of the country near the border with Kyrgyzstan. It had a population of 330,100 (1999 Census), up 9% from 1989, making it one of the fastest-growing cities in the country, after Nur-Sultan and Turkistan.
              </p>
              <p>
                One of the oldest cities in Kazakhstan and in Transoxania, built and populated by the ancient Sogdians, Taraz celebrated its official 2000th anniversary (recognized by UNESCO) in 2001, dating from a fortress built in the area by a Xiongnu Chanyu named Zhizhi and was a site of the Battle of Zhizhi in 36 BCE.[1] The city was first recorded under the name "Talas" in 568 CE by Menander Protector. The medieval city of Talas was a major trade centre along the Silk Road. Talas was later described by Xuanzang, who passed Talas in 629 and later wrote: Traveling westward from the Thousand Springs 140 or 150 li, we come to the city of Daluosi. The city is 8 or 9 li in diameter; and was settled by Hu ("foreign, non-Oriental") merchants from various nations. The products and the climate are about the same as Suyab.[2] The Talas alphabet, a variant of the Turkic "runiform" Orkhon script, is named for the town. Talas secured a place in history by virtue of the Battle of Talas (751 CE), which was fought between forces of the Chinese Tang Dynasty and those of the Arab Abbasid Caliphate. The battle took place somewhere along the Talas River in the Talas valley. One of its indirect outcomes was the introduction of paper to the west, via the Arab capture of Chinese paper makers.
              </p>
              <h4>History</h4>
              <p>
                Numerous archaeological finds and monuments in the foothills of Karatau and in Talas-Assin oasis show the antiquity of settlements in the Talas River valley, supporting Taraz's claim to being the most ancient city in Kazakhstan. The history of the city is composed of several historical periods, interrupted by destruction and depopulation. The first reference historically recorded city linked with Taraz and the basis for the claim of 2000-year-old history is the fortress of Zhizhi that briefly existed at the site of modern-day Taraz in the 1st century BCE.[citation needed] A city known as "Taraz" (or "Talas"[citation needed]) is then recorded in the 6th century CE[3] (568 CE[citation needed]) and is known to have existed until its decline in the 13th century.[3] The third historical period begins with the establishment of a Kokand fortress at the end of the 18th century, which in 1864 was named Auliye-Ata (from the Uzbek words meaning saint and father).[3] In 1936, the city was renamed Mirzoyan (Russian: Мирзоя́н), after Levon Mirzoyan.[3] After Mirzoyan's arrest in 1938, the city was renamed to Dzhambul (Russian: Джамбу́л), after the Kazakh traditional folksinger Jambyl Jabayev (Dzhambul Dzhabayev).[3] In 1993, the spelling of the city's name was officially changed to Jambyl/Dzhambyl (Kazakh: Жамбыл, Jambyl), and in 1997 the city was renamed Taraz.
              </p>
              <p>
                The city started to assume its present form when Colonel Chernyev's detachment took over the Aulie Ata fortress and annexed it to the Russian Empire, starting in 1864. Taraz was greatly improved by the Semirechensky railway that passed through the town in 1917.
              </p>
            </div>
            <h4>Photo Gallery</h4>
            <div class="popupGalleryWrapper">
              <img src="../img/cardImgs/taraz1.jpg" alt="">
              <img src="../img/cardImgs/taraz2.jpg" alt="">
              <img src="../img/cardImgs/taraz3.jpg" alt="">
              <img src="../img/cardImgs/taraz4.jpg" alt="">
              <img src="../img/cardImgs/taraz5.jpg" alt="">
            </div>
          </div>
          <div class="closeButtonWrapper">
            <button type="close" name="closePopup" id="closePopup"><i class="fa fa-times"></i> Close window</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h2>Hot sales</h2>
    <div class="part2 featuredTravel">
      <div class="card1">
        <a>
          <div class="top">
            <h3>Hamilton Highlights</h3>
          </div>
        </a>
      </div>
      <div class="popup p2c1_popup">
        <div class="popupWrapper">
          <div class="popupContentWrapper">
            <div class="popupTextWrapper">
              <h2>
                Hamilton Highlights
              </h2>
              <h4>Overview</h4>
              <p>
                Make an American history-themed road trip a pop-culture one focused on the Broadway smash “Hamilton,” and pat yourself on the back for the parenting win. Start in Yorktown, Virginia with visits to the Yorktown Battlefield, the site of the last major battle of the Revolutionary War, and nearby American Revolution Museum of Yorktown and stop at nearby Colonial Williamsburg, a living history museum where your family can get a sense of what it was like to live in 18th century America. From there, drive to Washington, D.C. to see the Washington Monument, the Thomas Jefferson Memorial  and the National Archives Museum, where you can view the Declaration of Independence, U.S. Constitution and an exhibit called “Behind the Musical: Alexander Hamilton Documents.”
              </p>
              <p>
                Next, drive to Philadelphia to visit Independence Hall, where Alexander Hamilton was one of three delegates to the Constitutional Convention, and the U.S. Mint, created at Hamilton’s behest when he served as Treasury Secretary. Then head east, making a pit stop at Hamilton Park in Weehawken, NJ to see the Dueling Grounds where Aaron Burr shot Hamilton. Make your final stop in New York City, stopping at Trinity Church to see the burial sites of Hamilton, his son, Philip, wife Eliza, Angelica Schuyler and Hercules Mulligan. Then it’s the grand finale: tickets to see the musical at Richard Rodgers Theatre in New York City (check the web site to make sure performance have started again; at time of writing, shows were canceled through January 3, 2021). As for getting there, bonus points if you take the A train: Lin-Manual Miranda said he wrote the song “Wait For it” from the show while riding that subway line.
              </p>
              <p>
                Hamilton's outdoor playground is here to help you answer the call to get outside for fresh air and beautiful scenery. Scenic routes include waterfront paths, lush forest valleys and the Bruce Trail that winds along the edge of the Niagara Escarpment. Best of all, these stunning walks are easy to reach and close to great attractions and dining.
              </p>
              <h4>Royal Botanical Gardens</h4>
              <p>
                Bragging rights at Canada’s largest botanical garden include: the world’s largest lilac collection, 100,000 spring bulbs, 3000 rose bushes, endless trails and the recently restored Rock Garden, a stunning and tranquil National Historic Site. Year-round events alongside award-winning dining round out Hamilton’s own paradise found.
              </p>
              <h4>African Lion Safari</h4>
              <p>
                One of Hamilton's most popular tourist attractions is home to lions, elephants and giraffes… oh my! Canada's original safari adventure includes a drive through reserve that lets you get up close to some of the world's most exotic animals. The kids will love cooling off at the waterpark, the hands-on animal shows and watching daily elephant swims.
              </p>
            </div>
            <h4>Photo Gallery</h4>
            <div class="popupGalleryWrapper">
              <img src="../img/cardImgs/hamil1.jpg" alt="">
              <img src="../img/cardImgs/hamil2.jpg" alt="">
              <img src="../img/cardImgs/hamil3.jpg" alt="">
              <img src="../img/cardImgs/hamil4.jpg" alt="">
              <img src="../img/cardImgs/hamil5.jpg" alt="">
            </div>
          </div>
          <div class="closeButtonWrapper">
            <button type="close" name="closePopup" id="closePopup"><i class="fa fa-times"></i> Close window</button>
          </div>
        </div>
      </div>
      <div class="card2">
        <a>
          <div class="top">
            <h3>Road to Hana</h3>
          </div>
          <div class="bottom">
            <p>
              From the bluff, Ho'okipa is a great spot to stop and watch some of the best surfing in Maui.
            </p>
          </div>
        </a>
      </div>
      <div class="popup p2c2_popup">
        <div class="popupWrapper">
          <div class="popupContentWrapper">
            <div class="popupTextWrapper">
              <h2>
                Road to Hana
              </h2>
              <h4>Hana overview</h4>
              <p>
                To do this iconic Maui day trip right you’ll need 10 to 12 hours (or better yet, an overnight stay in Hana so you can really take your time driving there and back), making it most suitable for older kids. The world-renowned, 52-mile Hana Highway connects Kahului with the town of Hana along a twisty road dotted with 59 (mostly one-lane) bridges and often a lot of crowds. But patience is rewarded with an endless array of Mother Nature’s finest offerings, including the black sand beach at Waiʻanapanapa State Park, the Ka’Eleku Caverns (aka the Hana Lava Tube), the stunning, 80-foot Wailua Falls, and Ohe’o Gulch, site of the Seven Sacred Pools—actually dozens of freshwater pools fed by waterfalls. Be sure to stop at at least one of the many roadside stands selling fresh, tropical fruit and banana bread, and download an app or audio guide to customize the trip to your family’s taste.
              </p>
              <h4>Paia Town</h4>
              <p>
                Paia is the last town before you make your journey clockwise to Hana Town. Here, you can have a great breakfast, grab some coffee, and pick up a Hana picnic lunch for the road and a Hana CD Guide. There's also some excellent shopping and fun people watching.
              </p>
              <h4>Twin Falls</h4>
              <p>
                The hike to see Twin Falls is unique and beautiful. These picturesque waterfalls offer a large area to swim at. Consider sticking to the closest falls along the path (lower falls) in order to save time on your trip and be really careful of flash floods! You'll always see cars parked here due to it being the first waterfalls along the Road to Hana with easy access. There's a farm stand selling delicious smoothies and goodies at the entrance.
              </p>
              <h4>Garden Of Eden Arboretum</h4>
              <p>
                It's worth paying to enjoy walking the grounds, which are immaculately kept up and offer all kinds of photo opportunities. Here you can see an 100 year-old mango tree, bamboo, ocean views and Puohokamoa Falls.
              </p>
              <h4>Honomany Bay</h4>
              <p>
                There are a few turnouts where you can get a good photo of the bay, but not many. You can also drive down to the bay, but we don't suggest it. You should have 4x4 and be prepared for muddy conditions. This is not a spot you want to get stuck at. The rocky beach is pretty but not good for swimming or sunbathing.
              </p>
              <h4>Hanawi Falls</h4>
              <p>
                Some beautiful falls along a bridge can be found at Hanawai Falls. Most of the time, only the right side flows, but when the flow is heavy, you'll find more falls to the left. Make sure to park in safe areas off the road.
              </p>
            </div>
            <h4>Photo Gallery</h4>
            <div class="popupGalleryWrapper">
              <img src="../img/cardImgs/hana1.jpg" alt="">
              <img src="../img/cardImgs/hana2.jpg" alt="">
              <img src="../img/cardImgs/hana3.jpg" alt="">
              <img src="../img/cardImgs/hana4.jpg" alt="">
              <img src="../img/cardImgs/hana5.jpg" alt="">
            </div>
          </div>
          <div class="closeButtonWrapper">
            <button type="close" name="closePopup" id="closePopup"><i   class="fa fa-times"></i> Close window</button>
          </div>
        </div>
      </div>
      <div class="card3">
        <a>
          <div class="top">
            <h3>Pennsylvania-Ohio Amusement Park Tour</h3>
          </div>
          <div class="bottom">
            <p>
              Blue Streak is a wooden roller coaster built in 1937 at Conneaut Lake Park in Conneaut Lake, Pennsylvania.
            </p>
          </div>
        </a>
      </div>
      <div class="popup p2c3_popup">
        <div class="popupWrapper">
          <div class="popupContentWrapper">
            <div class="popupTextWrapper">
              <h2>
                Pennsylvania-Ohio Amusement Park Tour
                <br>
              </h2>
              <h4>Thrill Your Taste Buds</h4>
              <p>
                Bites and Pints is an all-new event unlike any other you’ve experienced at Kennywood! Join us every Friday, Saturday, and Sunday in June for chef-inspired tastings of international cuisine, specialty cocktails, craft beer, and wine.
              </p>
              <h4>3+ Great Parks. 2 Easy Payments</h4>
              <p>
                The Platinum Pass is your passport to Pittsburgh fun! Enjoy unlimited visits to Kennywood, Sandcastle, and Idlewild all summer long and split the cost between 2 easy payments.
              </p>
              <h4>Join our team!</h4>
              <p>
                Are you looking for an exciting job with thrilling perks? Apply now to join our team, gain valuable work experience, and make friendships that will last a lifetime!
              </p>
              <h4>Pitsburg PA</h4>
              <p>
                A trip to Kennywood promises unforgettable family fun! Enjoy a unique mix of classic rides and modern thrills, including seven roller coasters, two kiddie areas, and several attractions that cannot be found anywhere else. Celebrating over 120 years of innovation and connection to the community, Kennywood continues to be an icon for each generation.
              </p>
              <p>
                Sandcastle, set along a quarter-mile boardwalk that overlooks the Monongahela River and its beautiful wooded hillside, delivers a unique vacation experience without leaving the city. With sixteen high-thrill waterslides, two full-sized pools, two children's areas, and a Lazy River, Sandcastle has summer fun for everyone!
              </p>
            </div>
            <h4>Photo Gallery</h4>
            <div class="popupGalleryWrapper">
              <img src="../img/cardImgs/park1.png" alt="">
              <img src="../img/cardImgs/park2.png" alt="">
              <img src="../img/cardImgs/park3.jpg" alt="">
              <img src="../img/cardImgs/park4.jpg" alt="">
              <img src="../img/cardImgs/park5.jpg" alt="">
            </div>
          </div>
          <div class="closeButtonWrapper">
            <button type="close" name="closePopup" id="closePopup"><i class="fa fa-times"></i> Close window</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <h2>Featured travel</h2>
    <div class="part3 inTheSpotlight">
      <div class="card">
        <a>
          <div class="top">
            <h3>Travel locally and safe</h3>
          </div>
          <div class="bottom">
            <p>
              Busy lives and packed schedules call for trips that are headache free. Our goal is to provide stress-free travel every time you and your family book with us. To that end, we’ll help you find and build your perfect trip, and 24/7 guaranteed customer support before, during, and after your vacation.
            </p>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="container">
    <h2>Recomended to you</h2>
    <div class="part4 familyTravel">
      <div class="card1">
        <a>
          <div class="top">
            <h3>Japan</h3>
          </div>
          <div class="bottom">
            <p>
              Japan is the eleventh-most populous country in the world, as well as one of the most densely populated and urbanized.
            </p>
          </div>
        </a>
      </div>
      <div class="popup p4c1_popup">
        <div class="popupWrapper">
          <div class="popupContentWrapper">
            <div class="popupTextWrapper">
              <h2>
                Japan <i>(second name Nippon)</i>
              </h2>
              <p>
                Japan (Japanese: 日本, Nippon [ɲippoꜜɴ] (About this soundlisten) or Nihon [ɲihoꜜɴ] (About this soundlisten)) is an island country in East Asia, located in the northwest Pacific Ocean. It is bordered on the west by the Sea of Japan, and extends from the Sea of Okhotsk in the north toward the East China Sea and Taiwan in the south. Part of the Ring of Fire, Japan spans an archipelago of 6852 islands covering 377,975 square kilometers (145,937 sq mi); the five main islands are Hokkaido, Honshu, Shikoku, Kyushu, and Okinawa. Tokyo is Japan's capital and largest city; other major cities include Yokohama, Osaka, Nagoya, Sapporo, Fukuoka, Kobe, and Kyoto.
              </p>
              <p>
                Japan is the eleventh-most populous country in the world, as well as one of the most densely populated and urbanized. About three-fourths of the country's terrain is mountainous, concentrating its population of 125.36 million on narrow coastal plains. Japan is divided into 47 administrative prefectures and eight traditional regions. The Greater Tokyo Area is the most populous metropolitan area in the world, with more than 37.4 million residents.
              </p>
              <h4>Languages</h4>
              <p>
                Japanese writing uses kanji (Chinese characters) and two sets of kana (syllabaries based on cursive script and radical of kanji), as well as the Latin alphabet and Arabic numerals.[239] English instruction was made mandatory in Japanese elementary schools in 2020.[240]
              </p>
              <p>
                Besides Japanese, the Ryukyuan languages (Amami,  Kunigami, Okinawan, Miyako, Yaeyama, Yonaguni), part of the Japonic language family, are spoken in the Ryukyu Islands chain.[241] Few children learn these languages,[242] but local governments have sought to increase awareness of the traditional languages.[243] The Ainu language, which is a language isolate, is moribund, with only a few native speakers remaining as of 2014.[244]
              </p>
              <h4>Customs and holidays</h4>
              <p>
                Ishin-denshin (以心伝心) is a Japanese idiom which denotes a form of interpersonal communication through unspoken mutual understanding.[286] Isagiyosa (潔さ) is a virtue of the capability of accepting death with composure. Cherry blossoms are a symbol of isagiyosa in the sense of embracing the transience of the world.[287] Hansei (反省) is a central idea in Japanese culture, meaning to acknowledge one's own mistake and to pledge improvement. Kotodama (言霊) refers to the Japanese belief that mystical powers dwell in words and names.[288]
              </p>
              <p>
                Officially, Japan has 16 national, government-recognized holidays. Public holidays in Japan are regulated by the Public Holiday Law (国民の祝日に関する法律, Kokumin no Shukujitsu ni Kansuru Hōritsu) of 1948.[289] Beginning in 2000, Japan implemented the Happy Monday System, which moved a number of national holidays to Monday in order to obtain a long weekend.[290] The national holidays in Japan are New Year's Day on January 1, Coming of Age Day on the second Monday of January, National Foundation Day on February 11, The Emperor's Birthday on February 23, Vernal Equinox Day on March 20 or 21, Shōwa Day on April 29, Constitution Memorial Day on May 3, Greenery Day on May 4, Children's Day on May 5, Marine Day on the third Monday of July, Mountain Day on August 11, Respect for the Aged Day on the third Monday of September, Autumnal Equinox on September 23 or 24, Health and Sports Day on the second Monday of October, Culture Day on November 3, and Labor Thanksgiving Day on November 23.[291]
              </p>
            </div>
              <h4>Photo Gallery</h4>
              <div class="popupGalleryWrapper">
                <img src="../img/cardImgs/jp1.jpg" alt="">
                <img src="../img/cardImgs/jp2.jpg" alt="">
                <img src="../img/cardImgs/jp3.jfif" alt="">
                <img src="../img/cardImgs/jp4.jpeg" alt="">
                <img src="../img/cardImgs/jp5.jpg" alt="">
                <img src="../img/cardImgs/jp6.jpg" alt="">
              </div>
            </div>
            <div class="closeButtonWrapper">
              <button type="close" name="closePopup" id="closePopup"><i class="fa fa-times"></i> Close window</button>
            </div>
          </div>
        </div>
        <div class="card2">
          <a>
            <div class="top">
              <h3>Pacific Coast Highway</h3>
            </div>
            <div class="bottom">
              <p>
                The legendary Pacific Coast Highway remains a marvel of human effort that hugs over 900 kilometers of California’s rugged and beautiful coastlines.
              </p>
            </div>
          </a>
        </div>
        <div class="popup p4c2_popup">
          <div class="popupWrapper">
            <div class="popupContentWrapper">
              <div class="popupTextWrapper">
                <h2>
                  Pacific Coast Highway <i>California</i>
                </h2>
                <h4>Why we recomend?</h4>
                <p>
                  This one’s for you, weary parents. This stretch of Highway 1 running up and down the California coastline is an incredibly popular road trip for its breathtaking scenery—just the thing to indulge your tired selves in while your little ones snooze in the back seat. Tackle all, part or—really—as much as you can knowing that this is typically a difficult age for traveling with kids. Buckle in your infant for a midday nap during a drive along the soaring cliffs in Big Sur, or take advantage of the car-accessible beaches and dune areas at Pismo Beach. From late October through February, you can also take your tots to the Eucalyptus-tree filled Pismo Beach Monarch Butterfly Grove, where more than 10,000 of the butterflies migrate each year. Treat your toddler to a visit to the Elephant Seal Rookery at San Piedras Beach in San Simeon, where as many as 17,000 of the adorable, big-nosed creatures head during migration season. If you’re brave enough to give the entire 656-mile north to south trip a try with a toddler, dangle a visit to either Disneyland or Legoland as a reward at the end, once the parks safely reopen.
                </p>
                <h4>Explore California’s stunning coastline</h4>
                <p>
                  The legendary Pacific Coast Highway (PCH) was first started in the 1930s, and remains a marvel of human effort that hugs over 900 kilometers (600 miles) of California’s rugged and beautiful coastlines. It is one of the most astoundingly scenic roads in the world, meant to be traversed slowly, while gasping at the mountains, towering trees, expansive beaches and endless sky. It also affords travelers an unparalleled opportunity to dip into all the character California has to offer: pioneer outposts, surfing villages, farm-fresh foods, local wine, roadside kitsch, Hollywood glitz and bohemia.
                </p>
                <p>
                  Before you get started on your road trip, some helpful tips: Without stopping, it takes approximately 10 hours to drive the entire length of the Pacific Coast Highway, but on this route, it’s recommended to take your time to see the sights and stay overnight along the way, stretching your vacation out to at least six days. Thanks to California’s mild weather, you can drive the Pacific Coast Highway at any time of year. The best weather is expected from late spring through fall, with the busiest travel season in July and August.
                </p>
                <h4>Felton and Santa Cruz</h4>
                <p>
                  As you wind your way from San Francisco to Santa Cruz, make a brief stop at Devil’s Slide, a 2-kilometer (1.3-mile) stretch of land that was once a piece of Highway One, but is now a scenic walking path in Pacifica. If you had any doubts about your PCH trip, they’ll be washed away by sweeping ocean views as you slalom past seaside outposts. Before hitting surfer-centric Santa Cruz, stop in nearby Felton, a drowsy mountain town nestled among Redwood trees. Refresh at watering hole Monty’s Log Cabin (its rustic appearance lives up to its name) which offers a sunny back patio. Then pop by The Bigfoot Discovery Museum to learn all about California’s favorite cryptid. Finally, make your way to Santa Cruz, a friendly beach town with a university, gorgeous redwood trees and waves that surfers from all over flock to ride. Founded in 1907, the Santa Cruz Boardwalk boasts old-fashioned roller coasters (with Pacific Ocean views!), an arcade and the distinct scent of sea air, cotton candy and hot dogs. (Fun fact: Scenes of the '80s classic film “The Lost Boys" were shot here.)
                </p>
                <h4>Cambria</h4>
                <p>
                  On the way into Cambria, stop at the Piedras Blancas Friends of the Elephant Seal rookery, where crowds of the bulbous-nosed pinnipeds rest, mate and fight. (But don’t get too close, these creatures can weigh over 4,000 kilograms or 8,000 pounds.) Continue to the charming seaside village, home to rocky shorelines, bluffs and tide pools teeming with sea life. Get a generous slab of warm ollaberry pie with vanilla ice cream at Cambria mainstay, Linn’s Restaurant.
                </p>
                <h4>Morrp Bay</h4>
                <p>
                  Your chances of encountering California’s diverse fauna are high in Morro Bay, a small city on (surprise!) a large bay and estuary. At Morro Bay State Park, you may see any number of wild animals including blue herons, monarch butterflies, hummingbirds and – yes – adorable, fluffy sea otters. The park offers trails, a small museum and picnic benches, making it a perfect road trip stop for when you’re feeling peckish and need to stretch your legs.
                </p>
                <h4>San Luis Obispo</h4>
                <p>
                  Cruise down the PCH to mellow college town San Luis Obispo, nicknamed SLO, where you can tour quirky attractions such as the colorful Bubblegum Alley. Before you go, be sure to sample local wines at one of more than 30 nearby wineries, or take a hike to the nearby Point San Luis Lighthouse for fresh air and stunning views. While the town has many great places to stay, the delightfully gaudy Madonna Inn offers themed rooms like Caveman and Showboat. You don’t need to stay there to enjoy the outrageous interior, which features Western murals, ornate chandeliers, flocked wallpaper – and pink, pink and more pink. Order a slice of (pink) cake at the counter and soak up the atmosphere.
                </p>
              </div>
              <h4>Photo Gallery</h4>
              <div class="popupGalleryWrapper">
                <img src="../img/cardImgs/pasif1.jpg" alt="">
                <img src="../img/cardImgs/pasif2.jpg" alt="">
                <img src="../img/cardImgs/pasif3.jpg" alt="">
                <img src="../img/cardImgs/pasif4.jpg" alt="">
                <img src="../img/cardImgs/pasif5.jpg" alt="">
                <img src="../img/cardImgs/pasif6.jpg" alt="">
              </div>
            </div>
            <div class="closeButtonWrapper">
              <button type="close" name="closePopup" id="closePopup"><i class="fa fa-times"></i> Close window</button>
            </div>
          </div>
        </div>
        <div class="card3">
          <a>
            <div class="top">
              <h3>Overseas Highway</h3>
            </div>
            <div class="bottom">
              <p>
                Since the 1950s the Overseas Highway has been refurbished into a main coastal highway between the cities of Miami and Key West
              </p>
            </div>
          </a>
        </div>
        <div class="popup p4c3_popup">
          <div class="popupWrapper">
            <div class="popupContentWrapper">
              <div class="popupTextWrapper">
                <h2>
                  Overseas Highway
                  <br>
                  <i>U.S.</i>
                </h2>
                <h4>Why we recomend?</h4>
                <p>
                  If your family’s idea of fun veers more toward wild wonders than wild rides, plan a trip along the gorgeous 113-mile road linking 42 islands over 44 bridges through the enchanting Florida Keys. Start just north of the highway at Everglades National Park, a 1.5 million-acre wetland that’s the largest subtropical wilderness area in the United States, and spot manatees, alligators and maybe a Florida panther. Then, stretch out your trip over several days, stopping in Key Largo at John Pennekamp Coral Reef State Park, an underwater park where you can take glass-bottomed boat tours, snorkel and scuba dive to check out 70 nautical miles of underwater beauty; and Marathon to visit The Turtle Hospital, where you might be lucky enough to witness a sea turtle being released back into the wild, and the Dolphin Research Center, a nonprofit where you can schedule an up close encounter with one of the friendly sea mammals. End your trip in Key West, the southernmost city in the continental United States, where fam-friendly highlights include the Key West Shipwreck Treasures Museum, where you can see shipwreck artifacts and listen to stories told by actors in period costumes.
                </p>
                <p>
                  The Overseas Highway is a 113-mile (181.9 km)[1][2] highway carrying U.S. Route 1 (US 1) through the Florida Keys to Key West. Large parts of it were built on the former right-of-way of the Overseas Railroad, the Key West Extension of the Florida East Coast Railway. Completed in 1912, the Overseas Railroad was heavily damaged and partially destroyed in the 1935 Labor Day hurricane. The Florida East Coast Railway was financially unable to rebuild the destroyed sections, so the roadbed and remaining bridges were sold to the state of Florida for $640,000.
                </p>
                <p>
                  Since the 1950s the Overseas Highway has been refurbished into a main coastal highway between the cities of Miami and Key West,[3] offering travelers an exotic roadway through a tropical savanna environment and access to the largest area of coral reefs on the U.S. mainland. Many exotic animals such as the American Alligator, American Crocodile and Key Deer inhabit the tropical islands of the Florida Keys.
                </p>
                <h4>Los Olivos and Solvang</h4>
                <p>
                  Perhaps you didn’t plan to stop in Denmark on your way down the coast, but here you are. Founded by Danish pioneers in 1911, Solvang is Denmark in miniature and home to many Danish bakeries. Wander among traditional architecture and check out faithful reproductions of Copenhagen's Little Mermaid statue and Round Tower, as well as homages to Hans Christian Andersen. A short drive from Solvang, you will find the rustically charming town of Los Olivos surrounded by expansive wineries in the Santa Ynez Valley. Make time for tastings at wineries like Demetria for lush roses with views of the rolling hills.
                </p>
                <h4>Santa Barbara</h4>
                <p>
                  Santa Barbara is the perfect embodiment of California’s two personalities: Beachy casual meets glitz. (Oprah owns an estate here.) This is a city filled with adobe homes, Spanish Colonial Revival architecture and mansions. Shop and explore the city’s unpretentious arts district known as the Funk Zone after taking in the city’s colonial history at the Old Mission Santa Barbara. Get a scoop of Churros Con Leche or Boysenberry Rose Milk Jam ice cream at McConnell’s Fine Ice Creams and enjoy fresh seafood and ocean views at Enterprise Fish Co. where you can sup on $1.50 oysters during happy hour. If you’re feeling adventurous, cut 20 minutes inland to Cold Spring Tavern, a bar and restaurant established in 1886 as a stagecoach stop. Then take advantage of the balmy weather and catch a movie at the Westwind Drive-In.
                </p>
              </div>
              <h4>Photo Gallery</h4>
              <div class="popupGalleryWrapper">
                <img src="../img/cardImgs/highway1.jpg" alt="">
                <img src="../img/cardImgs/highway2.jfif" alt="">
                <img src="../img/cardImgs/highway3.jpg" alt="">
                <img src="../img/cardImgs/highway4.jpg" alt="">
                <img src="../img/cardImgs/highway5.jpg" alt="">
              </div>
            </div>
            <div class="closeButtonWrapper">
              <button type="close" name="closePopup" id="closePopup"><i class="fa fa-times"></i> Close window</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <h2>Our app</h2>
      <div class="part5 getApp">
        <div class="p5_card">
          <a target="_blank" href="https://play.google.com/store/apps/details?id=kz.glatis.aviata&hl=ru&gl=US">
            <div class="left">
              <div class="getApp__photo">
                <img src="../img/booking-by-phone.jpg" alt="get the app">
              </div>
            </div>
            <div class="right">
              <div class="text">
                <h3>Get out mobile app just now!</h3>
                <h3>Wander Wisely with the Flying app.</h3>
                <p>
                  Scan this QR Code to download it faster.
                  <ul>
                    <li>
                      Get helpful alerts about flight status and gate numbers.
                    </li>
                    <li>
                      Access all your travel details, even when offline.
                    </li>
                    <li>
                      Easily contact your hotel by messaging them right in the app.
                    </li>
                  </ul>
                </p>
              </div>
              <div class="qr_code">
                <img src="../img/qr_code.png" alt="qr code">
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="reviews">
        <div class="allReviews">
          <div class="reviewMessage">
            <h3><i class="fa fa-circle"></i> Name</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="reviewMessage">
            <h3><i class="fa fa-circle"></i> Name</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="reviewMessage">
            <h3><i class="fa fa-circle"></i> Name</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
        <div class="leaveReview">
          <form action="index.html" method="post">
            <textarea name="leaveReview" rows="8" cols="10" maxlength="250" placeholder="Your comment..."></textarea>
            <button type="sendReview" name="sendReview">Publish</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <button class="goTopBtn" type="goTop" name="goTop">
    <i class="fa fa-chevron-up"></i>
  </button>
</main>


<?php
include_once 'footer.php';
?>

<!-- Own JS -->
<script src="../js/main.js"></script>
