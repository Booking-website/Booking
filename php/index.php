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
   3. Realize bank card, update/onchange send mb;
   7. Finish footer links;
   8. ADD EVERYWHERE HEADER AND FOOTER;

   1. Wrap all form except button.searchButton in div to make it's display grid better for button;//
   2. Create some pages for cards and link them together, to make content;
   4. Make design for Profile page;//
   5. Finish JS function to make correct date in date in main page;//
   6. Finish 5th card in main page//
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
                Japan (Japanese: 日本, Nippon [ɲippoꜜɴ] (About this   soundlisten) or Nihon [ɲihoꜜɴ] (About this soundlisten)) is an island country in East Asia, located in the northwest Pacific Ocean. It is bordered on the west by the Sea of Japan, and extends from the Sea of Okhotsk in the north toward the East China Sea and Taiwan in the south. Part of the Ring of Fire, Japan spans an archipelago of 6852 islands covering 377,975 square kilometers (145,937 sq mi); the five main islands are Hokkaido, Honshu, Shikoku, Kyushu, and Okinawa. Tokyo is Japan's capital and largest city; other major cities include Yokohama, Osaka, Nagoya, Sapporo, Fukuoka, Kobe, and Kyoto.
              </p>
              <p>
                Japan is the eleventh-most populous country in the world, as well as one of the most densely populated and urbanized. About three-fourths of the country's terrain is mountainous, concentrating its population of 125.36 million on narrow coastal plains. Japan is divided into 47 administrative prefectures and eight traditional regions. The Greater Tokyo Area is the most populous metropolitan area in the world, with more than 37.4 million residents.
              </p>
              <h5>Languages</h5>
              <p>
                Japanese writing uses kanji (Chinese characters) and two sets of kana (syllabaries based on cursive script and radical of kanji), as well as the Latin alphabet and Arabic numerals.[239] English instruction was made mandatory in Japanese elementary schools in 2020.[240]
              </p>
              <p>
                Besides Japanese, the Ryukyuan languages (Amami, Kunigami, Okinawan, Miyako, Yaeyama, Yonaguni), part of the Japonic language family, are spoken in the Ryukyu Islands chain.[241] Few children learn these languages,[242] but local governments have sought to increase awareness of the traditional languages.[243] The Ainu language, which is a language isolate, is moribund, with only a few native speakers remaining as of 2014.[244]
              </p>
              <h5>Customs and holidays</h5>
              <p>
                Ishin-denshin (以心伝心) is a Japanese idiom which denotes a form of interpersonal communication through unspoken mutual understanding.[286] Isagiyosa (潔さ) is a virtue of the capability of accepting death with composure. Cherry blossoms are a symbol of isagiyosa in the sense of embracing the transience of the world.[287] Hansei (反省) is a central idea in Japanese culture, meaning to acknowledge one's own mistake and to pledge improvement. Kotodama (言霊) refers to the Japanese belief that mystical powers dwell in words and names.[288]
              </p>
              <p>
                Officially, Japan has 16 national, government-recognized holidays. Public holidays in Japan are regulated by the Public Holiday Law (国民の祝日に関する法律, Kokumin no Shukujitsu ni Kansuru Hōritsu) of 1948.[289] Beginning in 2000, Japan implemented the Happy Monday System, which moved a number of national holidays to Monday in order to obtain a long weekend.[290] The national holidays in Japan are New Year's Day on January 1, Coming of Age Day on the second Monday of January, National Foundation Day on February 11, The Emperor's Birthday on February 23, Vernal Equinox Day on March 20 or 21, Shōwa Day on April 29, Constitution Memorial Day on May 3, Greenery Day on May 4, Children's Day on May 5, Marine Day on the third Monday of July, Mountain Day on August 11, Respect for the Aged Day on the third Monday of September, Autumnal Equinox on September 23 or 24, Health and Sports Day on the second Monday of October, Culture Day on November 3, and Labor Thanksgiving Day on November 23.[291]
              </p>
            </div>
            <h5>Photo Gallery</h5>
            <div class="popupGalleryWrapper">
              <img src="../img/panoramPhoto1.jfif" alt="">
              <img src="../img/panoramPhoto1.jfif" alt="">
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
                <i>Small description</i>
              </h2>
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,   sed do eiusmod.
              </p>
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <h5>Photo Gallery</h5>
            <div class="popupGalleryWrapper">
              <img src="../img/panoramPhoto1.jfif" alt="">
              <img src="../img/panoramPhoto1.jfif" alt="">
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
                <i>Small description</i>
              </h2>
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,   sed do eiusmod tempor incididunt ut labore et dolore magna  aliqua. Ut enim ad minim veniam, quis nostrud exercitation  ullamco laboris nisi ut aliquip ex ea commodo consequat.  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui  officia deserunt mollit anim id est laborum.
              </p>
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,   sed do eiusmod tempor incididunt ut labore et dolore magna  aliqua. Ut enim ad minim veniam, quis nostrud exercitation  ullamco laboris nisi ut aliquip ex ea commodo consequat.  Duis aute irure dolor in reprehenderit in voluptate velit   esse cillum dolore eu fugiat nulla pariatur. Excepteur sint   occaecat cupidatat non proident, sunt in culpa qui  officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <h5>Photo Gallery</h5>
            <div class="popupGalleryWrapper">
              <img src="../img/panoramPhoto1.jfif" alt="">
              <img src="../img/panoramPhoto1.jfif" alt="">
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
            <h3>Title h3</h3>
          </div>
        </a>
      </div>
      <div class="popup p2c1_popup">
        <div class="popupWrapper">
          <div class="popupContentWrapper">
            <div class="popupTextWrapper">
              <h2>
                Some text to test
                <br>
                <i>Small description</i>
              </h2>
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,   sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <h5>Photo Gallery</h5>
            <div class="popupGalleryWrapper">
              <img src="../img/panoramPhoto1.jfif" alt="">
              <img src="../img/panoramPhoto1.jfif" alt="">
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
            <h3>Title h3</h3>
          </div>
          <div class="bottom">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.   Tenetur, quos.
            </p>
          </div>
        </a>
      </div>
      <div class="popup p2c2_popup">
        <div class="popupWrapper">
          <div class="popupContentWrapper">
            <div class="popupTextWrapper">
              <h2>
                Some text to test
                <br>
                <i>Small description</i>
              </h2>
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,   sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <h5>Photo Gallery</h5>
            <div class="popupGalleryWrapper">
              <img src="../img/panoramPhoto1.jfif" alt="">
              <img src="../img/panoramPhoto1.jfif" alt="">
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
            <h3>Title h3</h3>
          </div>
          <div class="bottom">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, quos.
            </p>
          </div>
        </a>
      </div>
      <div class="popup p2c3_popup">
        <div class="popupWrapper">
          <div class="popupContentWrapper">
            <div class="popupTextWrapper">
              <h2>
                Some text to test
                <br>
                <i>Small description</i>
              </h2>
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,   sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,   sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <h5>Photo Gallery</h5>
            <div class="popupGalleryWrapper">
              <img src="../img/panoramPhoto1.jfif" alt="">
              <img src="../img/panoramPhoto1.jfif" alt="">
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
              Conference calls, to-do lists and, of course, soccer practice.  Busy lives and packed schedules call for trips that   are headache free. Our goal is to provide stress-free travel every time you and your family book with us so that you can spend less time worrying and more time building memories. To that end, we’ll help you find and build your perfect trip, plus offer transparent pricing and verifiable reviews, and 24/7 guaranteed customer support before, during, and after your vacation.
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
            <h3>Title h3</h3>
          </div>
          <div class="bottom">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.  Tenetur, quos.
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
              <h5>Languages</h5>
              <p>
                Japanese writing uses kanji (Chinese characters) and two sets of kana (syllabaries based on cursive script and radical of kanji), as well as the Latin alphabet and Arabic numerals.[239] English instruction was made mandatory in Japanese elementary schools in 2020.[240]
              </p>
              <p>
                Besides Japanese, the Ryukyuan languages (Amami,  Kunigami, Okinawan, Miyako, Yaeyama, Yonaguni), part of the Japonic language family, are spoken in the Ryukyu Islands chain.[241] Few children learn these languages,[242] but local governments have sought to increase awareness of the traditional languages.[243] The Ainu language, which is a language isolate, is moribund, with only a few native speakers remaining as of 2014.[244]
              </p>
              <h5>Customs and holidays</h5>
              <p>
                Ishin-denshin (以心伝心) is a Japanese idiom which denotes a form of interpersonal communication through unspoken mutual understanding.[286] Isagiyosa (潔さ) is a virtue of the capability of accepting death with composure. Cherry blossoms are a symbol of isagiyosa in the sense of embracing the transience of the world.[287] Hansei (反省) is a central idea in Japanese culture, meaning to acknowledge one's own mistake and to pledge improvement. Kotodama (言霊) refers to the Japanese belief that mystical powers dwell in words and names.[288]
              </p>
              <p>
                Officially, Japan has 16 national, government-recognized holidays. Public holidays in Japan are regulated by the Public Holiday Law (国民の祝日に関する法律, Kokumin no Shukujitsu ni Kansuru Hōritsu) of 1948.[289] Beginning in 2000, Japan implemented the Happy Monday System, which moved a number of national holidays to Monday in order to obtain a long weekend.[290] The national holidays in Japan are New Year's Day on January 1, Coming of Age Day on the second Monday of January, National Foundation Day on February 11, The Emperor's Birthday on February 23, Vernal Equinox Day on March 20 or 21, Shōwa Day on April 29, Constitution Memorial Day on May 3, Greenery Day on May 4, Children's Day on May 5, Marine Day on the third Monday of July, Mountain Day on August 11, Respect for the Aged Day on the third Monday of September, Autumnal Equinox on September 23 or 24, Health and Sports Day on the second Monday of October, Culture Day on November 3, and Labor Thanksgiving Day on November 23.[291]
              </p>
            </div>
              <h5>Photo Gallery</h5>
              <div class="popupGalleryWrapper">
                <img src="../img/panoramPhoto1.jfif" alt="">
                <img src="../img/panoramPhoto1.jfif" alt="">
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
              <h3>Title h3</h3>
            </div>
            <div class="bottom">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, quos.
              </p>
            </div>
          </a>
        </div>
        <div class="popup p4c2_popup">
          <div class="popupWrapper">
            <div class="popupContentWrapper">
              <div class="popupTextWrapper">
                <h2>
                  Some text to test
                  <br>
                  <i>Small description</i>
                </h2>
                <h5>Title</h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing   elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <h5>Title</h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <h5>Title</h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
              <h5>Photo Gallery</h5>
              <div class="popupGalleryWrapper">
                <img src="../img/panoramPhoto1.jfif" alt="">
                <img src="../img/panoramPhoto1.jfif" alt="">
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
              <h3>Title h3</h3>
            </div>
            <div class="bottom">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, quos.
              </p>
            </div>
          </a>
        </div>
        <div class="popup p4c3_popup">
          <div class="popupWrapper">
            <div class="popupContentWrapper">
              <div class="popupTextWrapper">
                <h2>
                  Some text to test
                  <br>
                  <i>Small description</i>
                </h2>
                <h5>Title</h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <h5>Title</h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <h5>Title</h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
              <h5>Photo Gallery</h5>
              <div class="popupGalleryWrapper">
                <img src="../img/panoramPhoto1.jfif" alt="">
                <img src="../img/panoramPhoto1.jfif" alt="">
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
          <a>
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
