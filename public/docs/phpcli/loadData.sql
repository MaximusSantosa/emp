truncate table emp;
LOAD DATA LOCAL INFILE '/tmp/combine.csv'
INTO TABLE emp
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(ID, NO, NIK, NAMA, GENDER, TGL_LAHIR, TGL_MASUK, CATEGORY, JAB, PERUSAHAAN, DEPT, SHIFT, TGL_KELUAR, MANAGER_NIK, STATUS_KARYAWAN);
