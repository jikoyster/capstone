DROP DATABASE IF EXISTS cesdms;

CREATE DATABASE cesdms;

USE cesdms;

CREATE TABLE user_role(
	ur_id INT AUTO_INCREMENT,
	designation VARCHAR(50) NULL,
	PRIMARY KEY (ur_id)
);
CREATE TABLE user_accounts(
	user_id INT AUTO_INCREMENT,
	firstname VARCHAR(50) NULL,
	lastname VARCHAR(50) NULL,
	email VARCHAR(50) NULL,
	contact_num VARCHAR(30) NULL,
	designation_fkid INT,
	office VARCHAR(50) NULL,
	department VARCHAR(50) NULL,
	organization VARCHAR(50) NULL,
	username VARCHAR(20) NULL,
	password VARCHAR(15) NULL,
	status BOOLEAN NOT NULL DEFAULT 1,
	registered_date DATETIME DEFAULT 0,
	PRIMARY KEY (user_id)
	
);
CREATE TABLE procedures(
	procedure_id INT AUTO_INCREMENT,
	issued_form VARCHAR(255) NULL,
	PRIMARY KEY (procedure_id)
);
CREATE TABLE proposal_header(
	propmain_id INT AUTO_INCREMENT,
	title VARCHAR(255) NULL,
	department VARCHAR(255) NULL,
	school VARCHAR(255) NULL,
	procedure_no INT,
	inclusive_date VARCHAR(255) NULL,
	venue VARCHAR(255) NULL,
	PRIMARY KEY (propmain_id)
	
);
CREATE TABLE proposal(
	proposal_id INT AUTO_INCREMENT,
	user_fkid INT,
	propmain_fkid INT,
	status BOOLEAN DEFAULT 0,
	date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (proposal_id)
);
CREATE TABLE outline_of_activities(
	oa_id INT AUTO_INCREMENT,
	prop_fkid INT,
	procedure_fkid INT,
	tentative_date VARCHAR(20) NULL,
	activity_name VARCHAR(255) NULL,
	participants_needed VARCHAR(20) NULL,
	persons_incharge VARCHAR(255) NULL, 
	PRIMARY KEY (oa_id)
);
CREATE TABLE budreq(
	budreq_id INT AUTO_INCREMENT,
	prop_fkid INT,
	grandtotal VARCHAR(10),
	PRIMARY KEY (budreq_id)
);
CREATE TABLE budreq_amt(
	ba_id INT AUTO_INCREMENT,
	frequency INT NULL,
	quantity INT NULL,
	amount INT NULL,
	subtotal VARCHAR(10) NULL,
	prop_fkid INT,
	PRIMARY KEY (ba_id)
);
CREATE TABLE budreq_transpo(
	br_transpo_id INT AUTO_INCREMENT,
	particulars VARCHAR(50) NULL,
	ba_fkid INT,
	prop_fkid INT,
	PRIMARY KEY (br_transpo_id)
	
);
CREATE TABLE budreq_food(
	br_food_id INT AUTO_INCREMENT,
	particulars VARCHAR(50) NULL,
	ba_fkid INT,
	prop_fkid INT,
	PRIMARY KEY (br_food_id)
	
);
CREATE TABLE budreq_materials(
	br_materials_id INT AUTO_INCREMENT,
	particulars VARCHAR(50) NULL,
	ba_fkid INT,
	prop_fkid INT,
	PRIMARY KEY (br_materials_id)
	
);
CREATE TABLE hr_implementation(
	hri_id INT AUTO_INCREMENT,
	prop_fkid INT,
	procedure_fkid INT,
	prep_facultymem VARCHAR(255) NULL,
	prepfm_role VARCHAR(255) NULL,
	prep_student VARCHAR(255) NULL,
	prepstud_role VARCHAR(255) NULL,
	imp_facultymem VARCHAR(255) NULL,
	impfm_role VARCHAR(255) NULL,
	imp_student VARCHAR(255) NULL,
	impstud_role VARCHAR(255) NULL,
	PRIMARY KEY (hri_id)
	
);
CREATE TABLE ac(
	ac_id INT AUTO_INCREMENT,
	rationale VARCHAR(255) NULL,
	goal VARCHAR(255) NULL,
	participants VARCHAR(255) NULL,
	procedure_fkid INT,
	PRIMARY KEY (ac_id)
	
);
CREATE TABLE ppa_nature(
	na_id INT AUTO_INCREMENT,
	b_fkid INT,
	nature VARCHAR(50) NULL,
	PRIMARY KEY (na_id)
);
CREATE TABLE program_area(
	pa_id INT AUTO_INCREMENT,
	b_fkid INT,
	area VARCHAR(50) NULL,
	PRIMARY KEY (pa_id)
);
CREATE TABLE e_achievements(
	achievements_id INT AUTO_INCREMENT,
	ac_fkid INT,
	specific_act VARCHAR(255) NULL,
	outputs_assess VARCHAR(255) NULL,
	PRIMARY KEY (achievements_id)
);
CREATE TABLE a(
	a_id INT AUTO_INCREMENT,
	ac_fkid INT,
	budreq_fkid INT,
	oa_fkid INT,
	procedure_fkid INT,
	PRIMARY KEY (a_id)
	
);
CREATE TABLE b_units(
	bu_id INT AUTO_INCREMENT,
	b_fkid INT,
	school VARCHAR(50) NULL,
	department VARCHAR(50) NULL,
	PRIMARY KEY (bu_id)
);
CREATE TABLE b_locus(
	bl_id INT AUTO_INCREMENT,
	b_fkid INT,
	leadership VARCHAR(50) NULL, 
	PRIMARY KEY (bl_id)
);
CREATE TABLE context_unit(
	cu_id INT AUTO_INCREMENT,
	b_fkid INT,
	unit_personnel VARCHAR(50) NULL, 
	PRIMARY KEY (cu_id)
);
CREATE TABLE b(
	b_id INT AUTO_INCREMENT,
	bu_fkid INT,
	timeframe VARCHAR(10) NULL,
	bl_fkid INT,
	na_fkid INT,
	pa_fkid INT,
	cu_fkid INT,
	productivity_dimension VARCHAR(255) NULL,
	economic_dimension VARCHAR(255) NULL,
	social_dimension VARCHAR(255) NULL,
	environmental_dimension VARCHAR(255) NULL,
	governance_dimension VARCHAR(255) NULL,
	practical_counts INT NULL,
	hri_fkid INT,
	usc_support_system VARCHAR(255) NULL,
	usc_partner_contrib VARCHAR(255) NULL,
	outside_partner VARCHAR(255) NULL,
	op_contrib VARCHAR(255) NULL,
	partnership_linkage_nature VARCHAR(255) NULL,
	procedure_fkid INT,
	PRIMARY KEY (b_id)
);
CREATE TABLE c(
	c_id INT AUTO_INCREMENT,
	requester VARCHAR(255) NULL,
	mode_of_request VARCHAR(255) NULL,
	oa_fkid INT,
	budreq_fkid INT,
	procedure_fkid INT,
	ac_fkid INT,
	PRIMARY KEY (c_id)	
);
CREATE TABLE d_highlights(
	highlights_id INT(2) AUTO_INCREMENT,
	perceived_beneficiaries VARCHAR(255) NULL,
	perceived_students VARCHAR(255) NULL,
	perceived_faculty VARCHAR(255) NULL,
	PRIMARY KEY (highlights_id)
);
CREATE TABLE d(
	d_id INT AUTO_INCREMENT,
	intro VARCHAR(255) NULL,
	PPB VARCHAR(255) NULL,
	challenges VARCHAR(255) NULL,
	h_fkid INT(2),
	PRIMARY KEY (d_id)
) ENGINE = InnoDB;
CREATE TABLE partner_collabs(
	partnerscollabs_id INT AUTO_INCREMENT,
	intra_name VARCHAR(100) NULL,
	intra_actcontrib VARCHAR(255) NULL,
	extra_name VARCHAR(100) NULL,
	assessment_relationship VARCHAR(255) NULL,
	desc_consrquence VARCHAR(255) NULL,
	e_fkid INT,
	PRIMARY KEY (partnerscollabs_id)
);
CREATE TABLE e_activities(
	e_act_id INT AUTO_INCREMENT,
	oa_fkid INT,
	e_fkid INT,
	inclusive_date DATE,
	total_hours INT(20),
	PRIMARY KEY (e_act_id)	
);
CREATE TABLE e_summary(
	e_summary_id INT AUTO_INCREMENT,
	bg_of_issue VARCHAR(255) NULL,
	major_achievements VARCHAR(255) NULL,
	results_contrib VARCHAR(255) NULL,
	PRIMARY KEY (e_summary_id)
);
CREATE TABLE achievements(
	ach_id INT AUTO_INCREMENT,
	goal VARCHAR(255) NULL,
	spec_obj VARCHAR(255) NULL,
	spec_act VARCHAR(255) NULL,
	outputs VARCHAR(255) NULL,
	PRIMARY KEY (ach_id)
);
CREATE TABLE e(
	e_id INT AUTO_INCREMENT,
	propmain_fkid INT,
	unit_rep VARCHAR(100) NULL,
	duration VARCHAR(50) NULL,
	final_target VARCHAR(100) NULL,
	partnerscollabs_intra VARCHAR(255) NULL,
	partnerscollabs_extra VARCHAR(255) NULL,
	strategy_adopted VARCHAR(255) NULL,
	observed_impact VARCHAR(255) NULL,
	measures_undertaken VARCHAR(255) NULL,
	good_practice  VARCHAR(255) NULL,
	lessons_learned VARCHAR(255) NULL,
	witnesstotheword VARCHAR(255) NULL,
	waysforward VARCHAR(255) NULL,
	e_act_fkid INT,
	e_summary_fkid INT,
	achievements_fkid INT,
	partner_collabs_fkid INT,
	PRIMARY KEY (e_id)		
);
CREATE TABLE approval(
	approve_id INT AUTO_INCREMENT,
	proposal_fkid INT,
	ai_fkid INT,
	chair BOOLEAN DEFAULT 0,
	coordinator BOOLEAN DEFAULT 0,
	dean BOOLEAN DEFAULT 0,
	director BOOLEAN DEFAULT 0,
	vpaa BOOLEAN DEFAULT 0,
	PRIMARY KEY (approve_id)
);
CREATE TABLE approval_info(
	ai_id INT AUTO_INCREMENT,
	user_fkid INT,
	approved_date DATETIME NULL,
	PRIMARY KEY (ai_id)		
);
CREATE TABLE comments(
	cmnt_id INT AUTO_INCREMENT,
	proposal_fkid INT,
	user_fkid INT,
	cmnt_date TIMESTAMP,
	cmnt_category VARCHAR(255),
	commentdesc VARCHAR(255),
	PRIMARY KEY (cmnt_id)
);

ALTER TABLE user_accounts
ADD FOREIGN KEY (designation_fkid) REFERENCES user_role(ur_id);

ALTER TABLE proposal_header
ADD FOREIGN KEY (procedure_no) REFERENCES procedures(procedure_id);

ALTER TABLE proposal
ADD FOREIGN KEY (user_fkid) REFERENCES user_accounts(user_id),
ADD FOREIGN KEY (propmain_fkid) REFERENCES proposal_header(propmain_id);

ALTER TABLE outline_of_activities
ADD FOREIGN KEY (prop_fkid) REFERENCES proposal_header(propmain_id),
ADD FOREIGN KEY (procedure_fkid) REFERENCES procedures(procedure_id);

ALTER TABLE budreq_transpo
ADD FOREIGN KEY (prop_fkid) REFERENCES proposal(proposal_id),
ADD FOREIGN KEY (ba_fkid) REFERENCES budreq_amt(ba_id);

ALTER TABLE budreq_food
ADD FOREIGN KEY (prop_fkid) REFERENCES proposal(proposal_id),
ADD FOREIGN KEY (ba_fkid) REFERENCES budreq_amt(ba_id);

ALTER TABLE budreq_materials 
ADD FOREIGN KEY (prop_fkid) REFERENCES proposal(proposal_id),
ADD FOREIGN KEY (ba_fkid) REFERENCES budreq_amt(ba_id);

ALTER TABLE budreq_amt 
ADD FOREIGN KEY (prop_fkid) REFERENCES proposal(proposal_id);

ALTER TABLE budreq
ADD FOREIGN KEY (prop_fkid) REFERENCES proposal(proposal_id);

ALTER TABLE hr_implementation
ADD FOREIGN KEY (prop_fkid) REFERENCES proposal_header(propmain_id),
ADD FOREIGN KEY (procedure_fkid) REFERENCES procedures(procedure_id);

ALTER TABLE ac
ADD FOREIGN KEY (procedure_fkid) REFERENCES procedures(procedure_id); 

ALTER TABLE e_achievements
ADD FOREIGN KEY (ac_fkid) REFERENCES ac(ac_id);

ALTER TABLE a
ADD FOREIGN KEY (ac_fkid) REFERENCES ac(ac_id),
ADD FOREIGN KEY (budreq_fkid) REFERENCES budreq(budreq_id),
ADD FOREIGN KEY (oa_fkid) REFERENCES outline_of_activities(oa_id),
ADD FOREIGN KEY (procedure_fkid) REFERENCES procedures(procedure_id);

ALTER TABLE b
ADD FOREIGN KEY (cu_fkid) REFERENCES context_unit(cu_id),
ADD FOREIGN KEY (na_fkid) REFERENCES ppa_nature(na_id),
ADD FOREIGN KEY (pa_fkid) REFERENCES program_area(pa_id),
ADD FOREIGN KEY (bu_fkid) REFERENCES b_units(bu_id),
ADD FOREIGN KEY (bl_fkid) REFERENCES b_locus(bl_id),
ADD FOREIGN KEY (hri_fkid) REFERENCES hr_implementation(hri_id),
ADD FOREIGN KEY (procedure_fkid) REFERENCES procedures(procedure_id);

ALTER TABLE b_units
ADD FOREIGN KEY (b_fkid) REFERENCES b(b_id);

ALTER TABLE b_locus
ADD FOREIGN KEY (b_fkid) REFERENCES b(b_id);

ALTER TABLE c
ADD FOREIGN KEY (budreq_fkid) REFERENCES budreq(budreq_id),
ADD FOREIGN KEY (oa_fkid) REFERENCES outline_of_activities(oa_id),
ADD FOREIGN KEY (procedure_fkid) REFERENCES procedures(procedure_id),
ADD FOREIGN KEY (ac_fkid) REFERENCES ac(ac_id);

ALTER TABLE d
ADD FOREIGN KEY (h_fkid) REFERENCES d_highlights(highlights_id);

ALTER TABLE partner_collabs
ADD FOREIGN KEY (e_fkid) REFERENCES e(e_id);

ALTER TABLE e_activities
ADD FOREIGN KEY (oa_fkid) REFERENCES outline_of_activities(oa_id),
ADD FOREIGN KEY (e_fkid) REFERENCES e(e_id);

ALTER TABLE e
ADD FOREIGN KEY (e_act_fkid) REFERENCES e_activities(e_act_id),
ADD FOREIGN KEY (partner_collabs_fkid) REFERENCES partner_collabs(partnerscollabs_id),
ADD FOREIGN KEY (e_summary_fkid) REFERENCES e_summary(e_summary_id),
ADD FOREIGN KEY (achievements_fkid) REFERENCES achievements(ach_id);

ALTER TABLE approval
ADD FOREIGN KEY (proposal_fkid) REFERENCES proposal(proposal_id),
ADD FOREIGN KEY (ai_fkid) REFERENCES approval_info(ai_id);

ALTER TABLE approval_info
ADD FOREIGN KEY (user_fkid) REFERENCES user_accounts(user_id);

ALTER TABLE comments
ADD FOREIGN KEY (proposal_fkid) REFERENCES proposal_header(propmain_id),
ADD FOREIGN KEY (user_fkid) REFERENCES user_accounts(user_id);


INSERT INTO user_role (ur_id, designation) VALUES 
	(NULL, 'Vice-President of Academic Affairs'),
	(NULL, 'CES Director'),
	(NULL, 'School Dean'),
	(NULL, 'Department Chair'),
	(NULL, 'Coordinator'),
	(NULL, 'Representative'),
	(NULL, 'Student Org Representative');

INSERT INTO procedures (procedure_id, issued_form) VALUES
	(NULL, 'A'),
	(NULL, 'B'),
	(NULL, 'C');

INSERT INTO user_accounts 
	(user_id, firstname, lastname, email, contact_num, designation_fkid, office, department, organization,  username, password, status, registered_date)
VALUES
	(NULL, 'Brenette', 'Abrenica', 'abrenica@usc.edu.ph', '123456789', 2, 'CES Office', 'CES Office', 'NULL', 'admin', 'admin', 1, NOW()),
	(NULL, 'Juan', 'Luna', 'jpl@sample.com', '123456789', 6, 'School of Arts and Sciences','Computer and Information Sciences', NULL, 'dcis_rep', 'dcis', 1, NOW()),
	(NULL, 'John', 'Doe', 'johndoe@sample.com', '123456789', 5, 'School of Arts and Sciences', 'Psychology', NULL, 'sample', 'sample', 1, NOW()),
	(NULL, 'Juan', 'Dela Cruz', 'juan.delacruz@sample.com', '123456789', 1, 'Vice-President of Academic Affairs Office', 'Psychology', NULL, 'sample1', 'sample1', 1, NOW()),
	(NULL, 'Felipe', 'Dimapalid', 'f.dimapalid@sample.com', '123456789', 3, 'School of Arts and Sciences', 'Psychology', NULL, 'sample2', 'sample2', 1, NOW()),
	(NULL, 'Sample', 'Sample', 'sample.sample@sample.com', '123456789', 4, 'School of Arts and Sciences', 'Computer and Information Sciences', NULL, 'sample3', 'sample3', 1, NOW()),
	(NULL, 'Sample1', 'Sample1', 'sample1@sample.com', '123456789', 7, 'School of Arts and Sciences', 'Computer and Information Sciences', NULL, 'sample4', 'sample4', 1, NOW());