CREATE DATABASE games_database;
USE games_database;

CREATE TABLE members (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    member_since DATETIME DEFAULT CURRENT_TIMESTAMP,
    is_banned BOOLEAN DEFAULT FALSE
);

CREATE TABLE staff (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE games (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    release_date DATE,
    score INT,
    platform VARCHAR(255) NOT NULL,
    image VARCHAR(255),
    description VARCHAR(10000),
    
    CHECK (platform IN ('PS4', 'Xbox One', 'PC', 'PS Vita', 'Switch', 'Xbox 360', 'PS3'))
);

INSERT INTO staff (email, password) VALUES ('k1763909@kcl.ac.uk', '$2y$10$vYiH4oN64vgYYUTU0QR4HuJKdpKAShoeFQtDcsKkJYPt.JlbZAPpq');

INSERT INTO games (title, release_date, score, platform, image, description)
VALUES 

('Battlefield V', '2018-11-15', 85, 'PS4', 'images/box-art/bfv.jpg', 'Chaos and scale have always been the foundation of the Battlefield franchise, and Battlefield V is no different. Squads of soldiers relentlessly push towards objectives with either sheer force or improvised tactics while gunfire and explosions ring throughout the beautiful, but war-torn landscapes. It''s an overwhelming sensory experience and a fine execution of a familiar formula if you play the better modes. Battlefield V goes back to where the franchise began by using World War II''s European theater as the backdrop for first-person shooting and vehicular combat in large multiplayer matches. It''s not too dissimilar to Battlefield 1, where every weapon has a distinct weight and impact that comes through vividly in both sight and sound. The core conceits of Battlefield remain mostly untouched, but small tweaks have been made to the formula, most of which are welcome.'),

('Divinity: Original Sin II', '2018-08-31', 95, 'PC', 'images/box-art/divinity2.jpg', 'Divinity: Original Sin II is an epic RPG with turn-based combat and cooperative/competitive multiplayer. The game''s devotion to the greatest elements of RPG mechanics include party-based role-playing game (with pen & paper RPG-like levels of freedom,) a strong focus on systematic gameplay and a well-grounded narrative. Generations after the events of Divinity: Original Sin, the upstart Bishop Alexandar the Innocent has declared Source the sole preserve of the Divine Order. Sourcerers are now criminals, and those suspected of having Source powers are hunted, apprehended, and forcibly purged of their powers -- leaving only empty bodies, devoid of emotion or free will, behind. Four burgeoning Sourcerers from around the realm are each a victim of Alexandar’s pogrom. There’s a bounty on your head. Divine Order magisters are hunting you. You don’t know who to trust, and the world is anything but your friend. To save yourself, you''ll need to take on the greatest Sourcerer the world has ever known. You''ll have to negotiate betrayal and deceit, the politics of a world tearing itself apart, and deal with your own Source powers. Travelling through majestic cities, dangerous wastelands, lost temples, and war-torn battlefields, you will be looking for a way to defeat Alexandar, discovering that the only way lies deep within yourself. It will be, without a doubt, the journey of a lifetime.'),

('Undertale', '2018-09-18', 93, 'Xbox One', 'images/box-art/undertale.jpg', 'Welcome to UNDERTALE. In this RPG, you control a human who falls underground into the world of monsters. Now you must find your way out... or stay trapped forever. ((Healthy Dog''s Warning: Game contains imagery that may be harmful to players with photosensitive epilepsy or similar condition.)) features: * Killing is unnecessary: negotiate out of danger using the unique battle system. * Time your attacks for extra damage, then dodge enemy attacks in a style reminiscent of top-down shooters. * Original art and soundtrack brimming with personality. * Soulful, character-rich story with an emphasis on humor. * Created mostly by one person. * Become friends with all of the bosses! * At least 5 dogs. * You can date a skeleton. * Hmmm... now there are 6 dogs...? * Maybe you won''t want to date the skeleton. * I thought I found a 7th dog, but it was actually just the 3rd dog. * If you play this game, can you count the dogs for me...? I''m not good at it. '),

('Forza Horizon 4', '2018-09-28', 92, 'Xbox One', 'images/box-art/forza4.png', 'Accelerate through historic Britain as you become a Horizon Superstar collecting 450 cars from 100 licensed manufacturers in Forza Horizon 4. For the first time in the series, you can experience dynamic seasons in this shared open-world. Discover lakes, castles and the breath-taking scenery in incredible 4K and HDR. The world evolves and changes as the seasons do so you must master driving in dry, wet, muddy, snowy and icy conditions. Get in gear as you explore this open-ended campaign where you can go alone or join multiplayer for a wild race. Forza Horizon 4 has more fun and rewarding gameplay than ever before.'),

('Hitman 2', '2018-11-09', 84, 'Xbox One', 'images/box-art/hitman2.jpg', 'Travel the globe and track your targets across exotic sandbox locations in Hitman 2. From sun-drenched streets to dark and dangerous rainforests, nowhere is safe from the world''s most deadly assassin, Agent 47. Prepare to experience the ultimate spy thriller story -- your mission is to eliminate the elusive Shadow Client and unravel his militia, but upon learning your target''s true identity and the truth about 47''s past, nothing will ever be the same.'),

('Assassin''s Creed: Odyssey', '2018-10-05', 78, 'Xbox One', 'images/box-art/assassins-creed-odyssey-xbox1.jpg', 'Assassin''s Creed Odyssey is a 2018 action role-playing video game developed by Ubisoft Quebec and published by Ubisoft. It is the eleventh major installment, and twentieth overall, in the Assassin''s Creed series and the successor to 2017''s Assassin''s Creed Origins. Set in the year 431 BC, the plot tells a fictional history of the Peloponnesian War between Athens and Sparta. Players control a male or female mercenary who fights for both sides as they attempt to unite their family and uncover a malign cult.'),

('The Legend Of Zelda: Breath Of The Wild', '2017-03-03', 97, 'Switch', 'images/box-art/botw-switch.jpg', 'Breath of the Wild received acclaim for its open-ended gameplay and attention to detail, with many publications describing it as one of the greatest video games of all time. Critics called it a landmark in open-world design, despite minor criticism for its technical performance at launch. It won numerous awards, including several game of the year awards. By September 2018, Breath of the Wild had sold over 11.7 million copies worldwide, making it the bestselling Zelda game.'),

('God Of War', '2018-04-20', 91, 'PS4', 'images/box-art/god-of-war-ps4.jpg', 'God of War is an action-adventure video game developed by Santa Monica Studio and published by Sony Interactive Entertainment (SIE). Released on April 20, 2018, for the PlayStation 4 (PS4) console, it is the eighth installment in the God of War series, the eighth chronologically, and the sequel to 2010''s God of War III. Unlike previous games, which were loosely based on Greek mythology, this installment is loosely based on Norse mythology, with the majority of it set in ancient Norway in the realm of Midgard. For the first time in the series, there are two main protagonists: Kratos, the former Greek God of War who remains as the only playable character, and he is joined by his young son Atreus; at times, the player may passively control him. Following the death of Kratos'' second wife and Atreus'' mother, they journey to fulfill her promise to spread her ashes at the highest peak of the nine realms. Kratos keeps his troubled past a secret from Atreus, who is unaware of his divine nature. Along their journey, they encounter monsters and gods of the Norse world.'),

('Battlefield V', '2018-11-15', 85, 'PC', 'images/box-art/bfv-box-pc.jpg', 'Chaos and scale have always been the foundation of the Battlefield franchise, and Battlefield V is no different. Squads of soldiers relentlessly push towards objectives with either sheer force or improvised tactics while gunfire and explosions ring throughout the beautiful, but war-torn landscapes. It''s an overwhelming sensory experience and a fine execution of a familiar formula if you play the better modes. Battlefield V goes back to where the franchise began by using World War II''s European theater as the backdrop for first-person shooting and vehicular combat in large multiplayer matches. It''s not too dissimilar to Battlefield 1, where every weapon has a distinct weight and impact that comes through vividly in both sight and sound. The core conceits of Battlefield remain mostly untouched, but small tweaks have been made to the formula, most of which are welcome.'),

('Red Dead Redemption 2', '2018-10-26', 89, 'PS4', 'images/box-art/rdr2-ps4.jpg', 'Red Dead Redemption 2 is a Western-themed action-adventure game developed and published by Rockstar Games. It was released on October 26, 2018, for the PlayStation 4 and Xbox One consoles. The third entry in the Red Dead series, it is a prequel to the 2010 game Red Dead Redemption. Set in 1899 in a fictionalized version of the Western United States, the story centers on outlaw Arthur Morgan, a member of the Van der Linde gang dealing with the decline of the Wild West whilst attempting to survive against government forces and other opponents. The story also follows fellow gang member John Marston, protagonist from the first Red Dead Redemption.'),

('Shadow Of The Tomb Raider', '2018-09-14', 76, 'PS4', 'images/box-art/shadow-of-the-tomb-raider-ps4.jpg', 'Shadow of the Tomb Raider is an action-adventure video game developed by Eidos Montreal in conjunction with Crystal Dynamics and published by Square Enix. It continues the narrative from the 2015 game Rise of the Tomb Raider and is the twelfth mainline entry in the Tomb Raider series. The game was released worldwide on 14 September 2018 for Microsoft Windows, PlayStation 4 and Xbox One, with a further release on macOS and Linux set for 2019.'),

('Shadow Of The Tomb Raider', '2018-09-14', 91, 'Xbox One', 'images/box-art/shadow-of-the-tomb-raider-xbox1.jpg', 'Shadow of the Tomb Raider is an action-adventure video game developed by Eidos Montreal in conjunction with Crystal Dynamics and published by Square Enix. It continues the narrative from the 2015 game Rise of the Tomb Raider and is the twelfth mainline entry in the Tomb Raider series. The game was released worldwide on 14 September 2018 for Microsoft Windows, PlayStation 4 and Xbox One, with a further release on macOS and Linux set for 2019.'),

('Super Mario: Odyssey', '2017-10-27', 96, 'Switch', 'images/box-art/super-mario-odyssey-switch.jpg', 'Super Mario Odyssey is a platform game published by Nintendo for the Nintendo Switch on October 27, 2017. An entry in the Super Mario series, it follows Mario and Cappy, a spirit that turns into Mario''s hat and allows him to possess other characters and objects, as they journey across various worlds to save Princess Peach from his nemesis Bowser, who plans to forcibly marry her. In contrast to the linear gameplay of prior entries, the game returns to the primarily open-ended, exploration-based gameplay featured in Super Mario 64 and Super Mario Sunshine.');
