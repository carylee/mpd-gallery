-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2011 at 11:49 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: 'mpdd-gallery-staging'
--

--
-- Dumping data for table 'acos'
--


--
-- Dumping data for table 'aros'
--

INSERT INTO aros (id, parent_id, model, foreign_key, alias, lft, rght) VALUES
(1, NULL, NULL, NULL, 'admins', 1, 2),
(2, NULL, NULL, NULL, 'students', 3, 4),
(3, NULL, NULL, NULL, 'visitors', 5, 6);

--
-- Dumping data for table 'aros_acos'
--

--
-- Dumping data for table 'statuses'
--

INSERT INTO statuses (id, `label`) VALUES
(1, 'Active'),
(2, 'Inactive');


--
-- Dumping data for table 'projects'
--

INSERT INTO projects (id, title, description, mpd_class, date_presented, patent_number, status_id, created, modified, cover, `like`) VALUES
(3, 'ThinQ', '<h3>Inspiration:</h3>\r\n<p>ThinQ came out of a brainstorming session designed to make brainstorming easier. Through the struggles our team was having dealing with brainstorming sessions, we began to brainstorm on what would make our team more productive. Through our own struggles we came up with a very elegant solution, ThinQ.</p>\r\n\r\n<br/><h3>Inception:</h3>\r\n<p>ThinQ knocks down the typical barriers of a brainstorming session. Addressing the issues of the Hippo in the room, insecurity, anonymity, group collaboration, and building on ideas were key to the concept of ThinQ. This is where the multiple handsets and one common interface came from. Also, we wanted to bring the nostalgia of Post-It note brainstorming into the modern era with an interactive software program.</p>\r\n\r\n<br/><h3>Implementation:</h3>\r\n<p>ThinQ brought together many different disciplines; software development, hardware, project management, and marketing. Leveraging our groupâ€™s strengths in these areas we were able to produce a product that spoke to the corporate and creative firms on the same level. They all saw the benefit to a glamorous and elegant way to increase their brainstorming productivity. Not only has this product impacted the productiveness of brainstorms in the largest corporations, but our group has used it to create even more fanciful products.</p>', 'MPD8', '2011-04-14', 'D2432856', NULL, '2011-04-14 08:44:06', '2011-04-19 11:42:36', NULL, 2),
(4, 'Baby No-Go', '<h3>Inspiration:</h3>\r\n<p>Early on in the program we began to look for opportunities of white space. Theprogram taught us the proper methods for finding and honing in on white space. Thisconcept began to be drawn out throughout the program. We gained inspiration fromour ethnographic studies and real life experiences. The Baby No-Go was a no-brainerproduct once we got more in depth in our studies. Though we brainstormed manyconcepts we finally settled on the one that best combined the user insights, marketingsurveys, and white space opportunities in the arena of baby care.</p><br/>\r\n<h3>Inception:</h3>\r\n<p>We began to develop the Baby No-Go with simple prototype parts. By getting the handson experience with the early prototypes it really helped to flush out our ideas. We usedcommon household items; duct tape, cardboard, string, dog food, bananas, and even ahammer. The first idea is not usually the best but what is spawns leads to a wonderfulconcept. As the semester went on we began to see more and more opportunities for theBaby No-Go. We created a marketing plan that would get this product into stores likeToys-R-Us and Target. Positive feedback was given based on our 3D renderings and wewere able to make quick tweaks to our idea in 3D before moving into the final toolingphase.</p><br/>\r\n\r\n<h3>Implementation:</h3>\r\n<p>All our hard work paid off in the final version of Baby No-Go. This baby collar holdsunwanted kids from jumping and climbing on guests. It is stylish and hits all thecustomer touch points of human factors, and unmet needs. Creating a blue ocean ofnew baby products geared toward keeping kids away promises to impact the socialexperiences of teachers, moms, dads, teenagers, and babies all across the world.</p>\r\n', 'MPD8', '2011-06-14', 'X2432856', NULL, '2011-04-14 08:45:44', '2011-04-19 11:33:03', 9, 2),
(5, 'Revolution', '<h3>Inspiration:</h3>\r\n<p>Getting inspired is sometimes like a bolt of lightning. It can happen without warning.  As we embarked on a new concept for a well known brands we were all simultaneously struck by an unbelievable concept. We all had aging parents who had trouble at night with seeing, or in dark restaurants ordering their dinner. However, they were hip and cool parents who did not want to compromise their style for their convenience. This is where Revolution came about.</p>\r\n<br />\r\n\r\n<h3>Inception:</h3>\r\n<p>Revolution took some tinkering with. We needed to create the right style for babyboomers without looking too edgy or too old fashioned. In the same time we neededto match todayâ€™s latest technologies into our concept to make it work. By combininge-ink technology with high style and fashion we captured a huge market segment.Baby boomers with great fashion sense, a sense of transition without compromise, andthe ability to keep living your way even with poor eyesight, were all captured in ourpersonas. This is how Revolution was born.</p>\r\n<br/>\r\n\r\n<h3>Implementation:</h3>\r\n<p>Getting Oakley to buy into our concept was the tough challenge. We had to provethat the technology would work. This was done with a very quick mock up prototype.Though we had a looks like in rendered form, our functions like prototype was likea helmet. Still, we fell that with a little more work, we can get all the componentsnecessary to fit into our glasses. This will change the way that people function and whoknows maybe you will be dancing the night away with your dad at the hottest club intown before you know it.</p>', 'MPD7', '2011-04-14', '', NULL, '2011-04-14 08:47:44', '2011-04-18 10:44:14', NULL, 2),
(7, 'Bread Lunchbox', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'MPD9', '2011-04-18', '', NULL, '2011-04-18 22:42:15', '2011-04-18 22:42:37', NULL, 0),
(8, 'Jimmy Choo Mop', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'MPD7', '2011-04-18', '01234829231', NULL, '2011-04-18 22:45:22', '2011-04-18 22:48:55', NULL, 0),
(9, 'Loaf Stairs', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'MPD6', '2011-04-19', '0128471381a', NULL, '2011-04-19 11:16:02', '2011-04-19 11:16:02', NULL, 0),
(10, 'Woof Mobile', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'MPD6', '2011-04-19', '', NULL, '2011-04-19 11:36:57', '2011-04-19 11:36:57', NULL, 0),
(11, 'Chair Stairs', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'MPD3', '2011-04-19', '123491193', NULL, '2011-04-19 11:40:37', '2011-04-19 11:40:37', NULL, 0);



--
-- Dumping data for table 'participants'
--

INSERT INTO participants (id, `name`, email, company, created, modified, project_id) VALUES
(3, 'Joe Smith', 'joe@hotmail.com', 'Target', '2011-04-15 12:03:40', '2011-04-17 22:35:43', 3),
(4, 'Nancy Thomas', 'NT2010@gmail.com', 'Northwestern Hospital', '2011-04-15 12:04:19', '2011-04-17 22:35:43', 3),
(5, 'Kara Cepress', 'kara@gmail.com', 'FBI', '2011-04-15 12:04:42', '2011-04-17 22:35:43', 3),
(6, 'Jessica Share', 'Jess345@gmail.com', 'Google', '2011-04-15 12:05:15', '2011-04-17 22:35:43', 3),
(7, 'Amy Hughes', 'AmyW@hotmail.com', 'MOMA', '2011-04-15 12:06:09', '2011-04-17 22:35:43', 3),
(10, 'Brad Wes', 'brad.wes@northwestern.edu', 'Levi Strauss', '2011-04-17 22:23:01', '2011-04-19 11:33:03', 4),
(17, 'Cary Lee', 'carylee@gmail.com', 'Northwestern University', '2011-04-17 23:31:39', '2011-04-17 23:33:37', 5),
(18, 'Todd Peacock-Preston', 'tepeacock@gmail.com', 'Depaul', '2011-04-17 23:33:37', '2011-04-17 23:33:37', 5),
(23, 'Cary Lee', 'carylee@gmail.com', 'Microsoft', '2011-04-18 22:42:15', '2011-04-18 22:42:37', 7),
(28, 'Cary Lee', 'carylee@gmail.com', 'Google', '2011-04-19 11:16:02', '2011-04-19 11:16:02', 9),
(29, 'Sarah Thomas', 'saraht3@gmail.com', 'Walmart', '2011-04-19 11:32:08', '2011-04-19 11:33:03', 4),
(30, 'Jarad Jay', 'JJ2020@gmail.com', 'Abbott', '2011-04-19 11:32:08', '2011-04-19 11:33:03', 4),
(31, 'Chris Lee', '23245CL@hotmail.com', 'Harley Davidson', '2011-04-19 11:32:08', '2011-04-19 11:33:03', 4),
(32, 'Leslie Chackk', 'chack.leslie@gmail.com', 'UOP Engineering', '2011-04-19 11:32:08', '2011-04-19 11:33:03', 4),
(33, 'Cary Lee', 'carylee@gmail.com', 'Google', '2011-04-19 11:36:57', '2011-04-19 11:36:57', 10),
(34, 'Nathan Ritter', 'nathan.ritter@gmail.com', 'Radio Flyer', '2011-04-19 11:40:37', '2011-04-19 11:40:37', 11);

--
-- Dumping data for table 'pictures'
--

INSERT INTO pictures (id, filename, project_id, created, modified, dir, mimetype, filesize) VALUES
(5, 'album_cover_thinq.jpg', 3, '2011-04-14 08:44:06', '2011-04-14 12:18:29', NULL, NULL, NULL),
(6, 'Brainstorming.png', 3, '2011-04-14 08:44:06', '2011-04-14 08:44:06', NULL, NULL, NULL),
(7, 'thinQprototype.jpg', 3, '2011-04-14 08:44:06', '2011-04-14 15:02:08', NULL, NULL, NULL),
(9, 'Album Cover_glamour rendering collar.jpg', 4, '2011-04-14 08:45:44', '2011-04-14 15:03:08', NULL, NULL, NULL),
(10, 'brainstorming_post_it.jpg', 4, '2011-04-14 08:45:44', '2011-04-14 15:03:31', NULL, NULL, NULL),
(13, 'album_cover_revolution.png', 5, '2011-04-14 08:47:44', '2011-04-14 15:07:29', NULL, NULL, NULL),
(14, 'revolution2.jpg', 5, '2011-04-14 08:47:44', '2011-04-14 15:04:30', NULL, NULL, NULL),
(15, 'revolution_ad.png', 5, '2011-04-14 08:47:44', '2011-04-14 15:04:43', NULL, NULL, NULL),
(20, 'Album_Cover_Bread_Lunchbox.jpg', 7, '2011-04-18 22:42:15', '2011-04-18 22:42:15', 'img/projects', 'image/jpeg', 36172),
(22, 'Jimmy_Choo_Mop.jpg', 8, '2011-04-18 22:45:22', '2011-04-18 22:45:22', 'img/projects', 'image/jpeg', 31166),
(26, 'baby_in_collar_product_shot.jpg', 4, '2011-04-19 11:11:30', '2011-04-19 11:11:30', 'img/projects', 'image/jpeg', 8777),
(27, 'Pero_Bread_Down_the_Stairs.jpg', 9, '2011-04-19 11:16:02', '2011-04-19 11:16:02', 'img/projects', 'image/jpeg', 228712),
(30, 'Dog_baby_mobile.jpg', 10, '2011-04-19 11:36:57', '2011-04-19 11:36:57', 'img/projects', 'image/jpeg', 56303),
(31, 'Chair_Stairs_cropped.jpg', 11, '2011-04-19 11:40:37', '2011-04-19 11:40:37', 'img/projects', 'image/jpeg', 19469);

--
-- Dumping data for table 'users'
--

INSERT INTO users (id, username, `password`, admin) VALUES
(1, 'admin', 'd872188f33ab6aa735bdd33a35884a9fee7c4d0f', 1);

