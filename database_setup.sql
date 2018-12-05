CREATE DATABASE games_database;
USE games_database;

CREATE TABLE members (
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

/*INSERT INTO members (email, password) VALUES ('adam.able@kcl.ac.uk', '123456789');
INSERT INTO members (email, password) VALUES ('k1763909@kcl.ac.uk', '987654321');*/

INSERT INTO games (title, release_date, score, platform, image, description)
VALUES 

('Battlefield V', '2018-11-15', 85, 'PS4', 'images/bfv.jpg', 'Chaos and scale have always been the foundation of the Battlefield franchise, and Battlefield V is no different. Squads of soldiers relentlessly push towards objectives with either sheer force or improvised tactics while gunfire and explosions ring throughout the beautiful, but war-torn landscapes. It''s an overwhelming sensory experience and a fine execution of a familiar formula if you play the better modes. Battlefield V goes back to where the franchise began by using World War II''s European theater as the backdrop for first-person shooting and vehicular combat in large multiplayer matches. It''s not too dissimilar to Battlefield 1, where every weapon has a distinct weight and impact that comes through vividly in both sight and sound. The core conceits of Battlefield remain mostly untouched, but small tweaks have been made to the formula, most of which are welcome.'),

('Divinity: Original Sin II', '2018-08-31', 95, 'PC', 'images/divinity2.jpg', 'Divinity: Original Sin II is an epic RPG with turn-based combat and cooperative/competitive multiplayer. The game''s devotion to the greatest elements of RPG mechanics include party-based role-playing game (with pen & paper RPG-like levels of freedom,) a strong focus on systematic gameplay and a well-grounded narrative. Generations after the events of Divinity: Original Sin, the upstart Bishop Alexandar the Innocent has declared Source the sole preserve of the Divine Order. Sourcerers are now criminals, and those suspected of having Source powers are hunted, apprehended, and forcibly purged of their powers -- leaving only empty bodies, devoid of emotion or free will, behind. Four burgeoning Sourcerers from around the realm are each a victim of Alexandar’s pogrom. There’s a bounty on your head. Divine Order magisters are hunting you. You don’t know who to trust, and the world is anything but your friend. To save yourself, you''ll need to take on the greatest Sourcerer the world has ever known. You''ll have to negotiate betrayal and deceit, the politics of a world tearing itself apart, and deal with your own Source powers. Travelling through majestic cities, dangerous wastelands, lost temples, and war-torn battlefields, you will be looking for a way to defeat Alexandar, discovering that the only way lies deep within yourself. It will be, without a doubt, the journey of a lifetime.'),

('Undertale', '2018-09-18', 93, 'Xbox One', 'images/undertale.jpg', 'Welcome to UNDERTALE. In this RPG, you control a human who falls underground into the world of monsters. Now you must find your way out... or stay trapped forever. ((Healthy Dog''s Warning: Game contains imagery that may be harmful to players with photosensitive epilepsy or similar condition.)) features: * Killing is unnecessary: negotiate out of danger using the unique battle system. * Time your attacks for extra damage, then dodge enemy attacks in a style reminiscent of top-down shooters. * Original art and soundtrack brimming with personality. * Soulful, character-rich story with an emphasis on humor. * Created mostly by one person. * Become friends with all of the bosses! * At least 5 dogs. * You can date a skeleton. * Hmmm... now there are 6 dogs...? * Maybe you won''t want to date the skeleton. * I thought I found a 7th dog, but it was actually just the 3rd dog. * If you play this game, can you count the dogs for me...? I''m not good at it. '),

('Forza Horizon 4', '2018-09-28', 92, 'Xbox One', 'images/forza4.png', 'Accelerate through historic Britain as you become a Horizon Superstar collecting 450 cars from 100 licensed manufacturers in Forza Horizon 4. For the first time in the series, you can experience dynamic seasons in this shared open-world. Discover lakes, castles and the breath-taking scenery in incredible 4K and HDR. The world evolves and changes as the seasons do so you must master driving in dry, wet, muddy, snowy and icy conditions. Get in gear as you explore this open-ended campaign where you can go alone or join multiplayer for a wild race. Forza Horizon 4 has more fun and rewarding gameplay than ever before.'),

('Hitman 2', '2018-11-09', 84, 'Xbox One', 'images/hitman2.jpg', 'Travel the globe and track your targets across exotic sandbox locations in Hitman 2. From sun-drenched streets to dark and dangerous rainforests, nowhere is safe from the world''s most deadly assassin, Agent 47. Prepare to experience the ultimate spy thriller story -- your mission is to eliminate the elusive Shadow Client and unravel his militia, but upon learning your target''s true identity and the truth about 47''s past, nothing will ever be the same.');
