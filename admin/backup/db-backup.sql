DROP TABLE admin;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES("1","admin","admin");



DROP TABLE candidates;

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `party` varchar(100) NOT NULL,
  `votes` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

INSERT INTO candidates VALUES("1","Argie Policarpio","Chairman","LAKAS","1","ownerpic.png","");
INSERT INTO candidates VALUES("2","Febe Tabar","Chairman","LAKAS","2","wire_transfer_256.png","");
INSERT INTO candidates VALUES("3","Amy Serviano","Vice-Chairman","LAKAS","2","wire_transfer_256.png","");
INSERT INTO candidates VALUES("4","Mary Jane Serviano","Vice-Chairman","LAKAS","2","wire_transfer_256.png","");
INSERT INTO candidates VALUES("5","Carlo Mesa","Secretary-General","LAKAS","3","wire_transfer_256.png","");
INSERT INTO candidates VALUES("6","Jano Gibs","Secretary-General","LAKAS","0","wire_transfer_256.png","");
INSERT INTO candidates VALUES("7","Liezel Barabas","Social-Affair","LAKAS","2","wire_transfer_256.png","");
INSERT INTO candidates VALUES("8","Jemar Agi","Social-Affair","LAKAS","1","wire_transfer_256.png","");
INSERT INTO candidates VALUES("9","Mirrian Santiago","Senator","LAKAS","3","wire_transfer_256.png","");
INSERT INTO candidates VALUES("10","Bong Revilla","Senator","LAKAS","2","wire_transfer_256.png","");
INSERT INTO candidates VALUES("11","@lbee Binitez","Representative","LAKAS","0","wire_transfer_256.png","BSHM");
INSERT INTO candidates VALUES("12","Kako Lacson","Representative","LAKAS","1","wire_transfer_256.png","BSCS");
INSERT INTO candidates VALUES("13","ouiuiu","Senator","LAKAS","1","","");
INSERT INTO candidates VALUES("14","iuiui","Senator","LAKAS","1","","");
INSERT INTO candidates VALUES("15","uyuyu","Senator","LAKAS","2","","");
INSERT INTO candidates VALUES("16","wapak","Senator","LAKAS","3","","");
INSERT INTO candidates VALUES("17","kjkjkjk","Senator","LAKAS","3","","");
INSERT INTO candidates VALUES("18","mlkjlkl","Senator","LAKAS","2","","");
INSERT INTO candidates VALUES("19","klkl","Senator","LAKAS","3","","");
INSERT INTO candidates VALUES("20","cfcc","Senator","LAKAS","3","","");
INSERT INTO candidates VALUES("21","hbh","Senator","LAKAS","3","","");
INSERT INTO candidates VALUES("22","aple","Senator","LAKAS","3","","");
INSERT INTO candidates VALUES("23","lk,lkl","Senator","LAKAS","3","","");
INSERT INTO candidates VALUES("24","llplpl","Senator","LAKAS","2","","");
INSERT INTO candidates VALUES("25",";l;l;","Senator","LAKAS","2","","");
INSERT INTO candidates VALUES("26","uhyuyh","Senator","LAKAS","1","","");
INSERT INTO candidates VALUES("27","mnmn","Senator","LAKAS","1","","");
INSERT INTO candidates VALUES("28","Baliling Demagiba","Representative","LAKAS","2","","BSIT");
INSERT INTO candidates VALUES("29","iuiu","Constitutional-Affairs","LAKAS","3","wire_transfer_256.png","None");
INSERT INTO candidates VALUES("30","mn mnmn","Gender-Affairs","LAKAS","3","wire_transfer_256.png","None");
INSERT INTO candidates VALUES("31","kluiu","Special-Need","LAKAS","3","wire_transfer_256.png","None");
INSERT INTO candidates VALUES("32","Raph","Chairman","LAKAS","1","favicon.png","BSCS");
INSERT INTO candidates VALUES("33","Meshak Ian","Secretary-General","LAKAS","1","favicon.png","BSCS");
INSERT INTO candidates VALUES("34","Faith Ndanu","Social-Affair","LAKAS","1","favicon.png","BSHM");
INSERT INTO candidates VALUES("35","Davis kiokoko","Constitutional-Affairs","LAKAS","1","favicon.png","BSCE");
INSERT INTO candidates VALUES("36","Carol Irungu","Gender-Affairs","LAKAS","1","favicon.png","BSCrim");
INSERT INTO candidates VALUES("37","Herbert nobert","Special-Need","LAKAS","1","favicon.png","BSCS");
INSERT INTO candidates VALUES("38","Herbert nobert","Special-Need","LAKAS","1","favicon.png","BSCS");
INSERT INTO candidates VALUES("39","menya Jacob","Representative","LAKAS","0","favicon.png","BSCE");
INSERT INTO candidates VALUES("40","menya Jacob","Representative","LAKAS","0","favicon.png","BSCE");



DROP TABLE course;

CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO course VALUES("1","BSCS");
INSERT INTO course VALUES("2","BSIT");
INSERT INTO course VALUES("3","BSHM");
INSERT INTO course VALUES("4","BSCE");
INSERT INTO course VALUES("5","BSCrim");



DROP TABLE list_stu_num;

CREATE TABLE `list_stu_num` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_number` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO list_stu_num VALUES("4","27771380","used","Raymond Jeff","BSIT");
INSERT INTO list_stu_num VALUES("5","29961550","used","loyce, amina tanu","BSIT");
INSERT INTO list_stu_num VALUES("6","111/05118","used","kioko, Davis nnnn","BSCS");



DROP TABLE party;

CREATE TABLE `party` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO party VALUES("2","LAKAS","Malakas Pala");



DROP TABLE position;

CREATE TABLE `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO position VALUES("1","Chairman");
INSERT INTO position VALUES("2","Vice-Chairman");
INSERT INTO position VALUES("3","Secretary-General");
INSERT INTO position VALUES("4","Social-Affair");
INSERT INTO position VALUES("5","Constitutional-Affairs");
INSERT INTO position VALUES("6","Gender-Affairs");
INSERT INTO position VALUES("7","Special-Need");
INSERT INTO position VALUES("8","Senator");
INSERT INTO position VALUES("9","Representative");



DROP TABLE students;

CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO students VALUES("6","Raymond Jeff","BSIT","27771380","jeff","notvoted","what is your favorite color","white");
INSERT INTO students VALUES("7","Amina Loyce","","29961550","amina","voted","what is your favorite color","white");
INSERT INTO students VALUES("8","loyce, amina tanu","BSIT","29961550","amina","voted","what is your best meal","chapo");
INSERT INTO students VALUES("9","kioko, Davis nnnn","BSCS","111/05118","davis","voted","what is your hobby","sleeping");



DROP TABLE votedetails;

CREATE TABLE `votedetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate` varchar(100) NOT NULL,
  `voters` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

INSERT INTO votedetails VALUES("1","Argie Policarpio","C-08769-15");
INSERT INTO votedetails VALUES("2","Amy Serviano","C-08769-15");
INSERT INTO votedetails VALUES("3","Carlo Mesa","C-08769-15");
INSERT INTO votedetails VALUES("4","Liezel Barabas","C-08769-15");
INSERT INTO votedetails VALUES("5","iuiu","C-08769-15");
INSERT INTO votedetails VALUES("6","mn mnmn","C-08769-15");
INSERT INTO votedetails VALUES("7","kluiu","C-08769-15");
INSERT INTO votedetails VALUES("8","Mirrian Santiago","C-08769-15");
INSERT INTO votedetails VALUES("9","Bong Revilla","C-08769-15");
INSERT INTO votedetails VALUES("10","Baliling Demagiba","C-08769-15");
INSERT INTO votedetails VALUES("11","Febe Tabar","29961550");
INSERT INTO votedetails VALUES("12","Mary Jane Serviano","29961550");
INSERT INTO votedetails VALUES("13","Carlo Mesa","29961550");
INSERT INTO votedetails VALUES("14","Jemar Agi","29961550");
INSERT INTO votedetails VALUES("15","iuiu","29961550");
INSERT INTO votedetails VALUES("16","mn mnmn","29961550");
INSERT INTO votedetails VALUES("17","kluiu","29961550");
INSERT INTO votedetails VALUES("18","Mirrian Santiago","29961550");
INSERT INTO votedetails VALUES("19","uyuyu","29961550");
INSERT INTO votedetails VALUES("20","wapak","29961550");
INSERT INTO votedetails VALUES("21","kjkjkjk","29961550");
INSERT INTO votedetails VALUES("22","mlkjlkl","29961550");
INSERT INTO votedetails VALUES("23","klkl","29961550");
INSERT INTO votedetails VALUES("24","cfcc","29961550");
INSERT INTO votedetails VALUES("25","hbh","29961550");
INSERT INTO votedetails VALUES("26","aple","29961550");
INSERT INTO votedetails VALUES("27","lk,lkl","29961550");
INSERT INTO votedetails VALUES("28","llplpl","29961550");
INSERT INTO votedetails VALUES("29",";l;l;","29961550");
INSERT INTO votedetails VALUES("30","0","29961550");
INSERT INTO votedetails VALUES("31","Febe Tabar","29961550");
INSERT INTO votedetails VALUES("32","Amy Serviano","29961550");
INSERT INTO votedetails VALUES("33","Carlo Mesa","29961550");
INSERT INTO votedetails VALUES("34","Liezel Barabas","29961550");
INSERT INTO votedetails VALUES("35","iuiu","29961550");
INSERT INTO votedetails VALUES("36","mn mnmn","29961550");
INSERT INTO votedetails VALUES("37","kluiu","29961550");
INSERT INTO votedetails VALUES("38","wapak","29961550");
INSERT INTO votedetails VALUES("39","kjkjkjk","29961550");
INSERT INTO votedetails VALUES("40","mlkjlkl","29961550");
INSERT INTO votedetails VALUES("41","klkl","29961550");
INSERT INTO votedetails VALUES("42","cfcc","29961550");
INSERT INTO votedetails VALUES("43","hbh","29961550");
INSERT INTO votedetails VALUES("44","aple","29961550");
INSERT INTO votedetails VALUES("45","lk,lkl","29961550");
INSERT INTO votedetails VALUES("46","llplpl","29961550");
INSERT INTO votedetails VALUES("47",";l;l;","29961550");
INSERT INTO votedetails VALUES("48","uhyuyh","29961550");
INSERT INTO votedetails VALUES("49","mnmn","29961550");
INSERT INTO votedetails VALUES("50","Baliling Demagiba","29961550");
INSERT INTO votedetails VALUES("51","Raph","111/05118");
INSERT INTO votedetails VALUES("52","Mary Jane Serviano","111/05118");
INSERT INTO votedetails VALUES("53","Meshak Ian","111/05118");
INSERT INTO votedetails VALUES("54","Faith Ndanu","111/05118");
INSERT INTO votedetails VALUES("55","Davis kiokoko","111/05118");
INSERT INTO votedetails VALUES("56","Carol Irungu","111/05118");
INSERT INTO votedetails VALUES("57","Herbert nobert","111/05118");
INSERT INTO votedetails VALUES("58","Mirrian Santiago","111/05118");
INSERT INTO votedetails VALUES("59","Bong Revilla","111/05118");
INSERT INTO votedetails VALUES("60","ouiuiu","111/05118");
INSERT INTO votedetails VALUES("61","iuiui","111/05118");
INSERT INTO votedetails VALUES("62","uyuyu","111/05118");
INSERT INTO votedetails VALUES("63","wapak","111/05118");
INSERT INTO votedetails VALUES("64","kjkjkjk","111/05118");
INSERT INTO votedetails VALUES("65","klkl","111/05118");
INSERT INTO votedetails VALUES("66","cfcc","111/05118");
INSERT INTO votedetails VALUES("67","hbh","111/05118");
INSERT INTO votedetails VALUES("68","aple","111/05118");
INSERT INTO votedetails VALUES("69","lk,lkl","111/05118");
INSERT INTO votedetails VALUES("70","Kako Lacson","111/05118");



