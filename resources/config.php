<?php
 
/*
    The important thing to realize is that the config file should be included in every
    page of your project, or at least any page you want access to these settings.
    This allows you to confidently use these settings throughout a project because
    if something changes such as your database credentials, or a path to a specific resource,
    you'll only need to update it here.
*/
 
$config = array(
    "db" => array(
        "db1" => array(
            "dbname" => "doctors2_doctors",
            "username" => "doctors2_doctors",
            "password" => "doctors2_test123",
            "host" => "localhost"
        ),
        /*"db2" => array(
            "dbname" => "database2",
            "username" => "dbUser",
            "password" => "pa$$",
            "host" => "localhost"
        )*/
    ),
    "urls" => array(
        "baseUrl" => "http://doctorsatknox.com.au"
    ),
    "paths" => array(
        "resources" => "/resources",
        "logs"      => "/resources/logs",
        "images" => array(
            "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
        )
    )
);
 
$seo = array(
    "home" => array(
        "keywords" => "Doctors@Knox, Doctors at Knox, Westfield, Knox medical centre, knox podiatry, knox podiatrist, knox physiotherapy, knox physiotherapist, eastern suburbs doctors, Doctors, general practice, general practitioner, women health, sports injuries, Wantirna South, Knoxfield, Westfield Knox, medicare, bulk billing, mixed billing, 7 days, pathology, podiatry, podiatrist",
        "description" => "Doctors at Knox Medical Center. BULK BILLING 7 DAYS PER WEEK. Appointments are made by calling the clinic on 9800 0399 or Online Booking",
        "title" => "Wantirna Medical Clinic | Westfield Knox Medical Clinic | Doctors@Knox"
    ),
    "fluvax" => array(
        "keywords" => "Doctors@Knox, Doctors at Knox, Westfield, Knox medical center, Doctors, general practice, general practitioner, women health, sports injuries, Wantirna South, Knoxfield, Westfield Knox, medicare, bulk billing, pathology, podiatry, podiatrist",
        "description" => "Within our clinic we have excellent nursing staff � They are available to help with Childhood/Adult, Travel Immunizations and Flu vaccines. ECG’s...",
        "title" => "Doctors@Knox | Westfield Knox Shopping Centre Medical Clinic | Flu Vaccination<",
        "og:url" => "http://doctorsatknox.com.au/?page=nurse",
        "og:title" => "Nurse - Westfield Knox Shopping Centre Medical Clinic",
        "og:description" => "Within our clinic we have excellent nursing staff � They are available to help with Childhood/Adult, Travel Immunizations and Flu vaccines. ECG’s...",
        "og:type" => "article"
    ),
    "doctors" => array(
        "keywords" => "Doctors, Preventative Health, Travel Medicine, Sports Injuries, General Dermatology, Minor Surgical Procedures",
        "description" => "5 years in gaining experience in surgery and almost a decade in emergency",
        "title" => "Doctors@Knox | Doctors - Westfield Knox Shopping Centre Medical Clinic",
        "og:url" => "http://doctorsatknox.com.au/?page=doctors",
        "og:title" => "Doctors - Westfield Knox Shopping Centre Medical Clinic",
        "og:description" => "5 years in gaining experience in surgery and almost a decade in emergency",
        "og:type" => "article"
    ),
    "allied-health" => array(
        "keywords" => "Doctors@Knox, Doctors at Knox, Westfield, Knox medical center, Doctors, general practice, general practitioner, women health, sports injuries, Wantirna South, Knoxfield, Westfield Knox, medicare, bulk billing, pathology, podiatry, podiatrist",
        "description" => "",
        "title" => "Doctors@Knox | Podiatry at Knox, Physiotherapy at Knox - Westfield Knox Shopping Centre Medical Clinic",
        "og:url" => "http://doctorsatknox.com.au/?page=allied-health",
        "og:title" => "Allied Health - Westfield Knox Shopping Centre Medical Clinic",
        "og:description" => "",
        "og:type" => "article"
    ),
    "appointments" => array(
        "keywords" => "Doctors@Knox, Doctors at Knox, Westfield, Knox medical center, Doctors, general practice, general practitioner, women health, sports injuries, Wantirna South, Knoxfield, Westfield Knox, medicare, bulk billing, pathology, podiatry, podiatrist",
        "description" => "BULK BILLING 7 DAYS PER WEEK � Appointments are made by calling the clinic on 9800 0399. If this is an emergency please call 000. A standard appo...",
        "title" => "Doctors@Knox | Westfield Knox Shopping Centre Medical Clinic",
        "og:url" => "http://doctorsatknox.com.au/?page=appointments",
        "og:title" => "Appointments - Westfield Knox Shopping Centre Medical Clinic",
        "og:description" => "BULK BILLING 7 DAYS PER WEEK � Appointments are made by calling the clinic on 9800 0399. If this is an emergency please call 000. A standard appo...",
        "og:type" => "Doctors@Knox | Westfield Knox Shopping Centre Medical Clinic"
    ),
    "nurse" => array(
        "keywords" => "Doctors@Knox, Doctors at Knox, Westfield, Knox medical center, Doctors, general practice, general practitioner, women health, sports injuries, Wantirna South, Knoxfield, Westfield Knox, medicare, bulk billing, pathology, podiatry, podiatrist",
        "description" => "Within our clinic we have excellent nursing staff � They are available to help with Childhood/Adult, Travel Immunizations and Flu vaccines. ECG’s...",
        "title" => "Doctors@Knox | Westfield Knox Shopping Centre Medical Clinic | Nurses",
        "og:url" => "http://doctorsatknox.com.au/?page=nurse",
        "og:title" => "Nurse - Westfield Knox Shopping Centre Medical Clinic",
        "og:description" => "Within our clinic we have excellent nursing staff � They are available to help with Childhood/Adult, Travel Immunizations and Flu vaccines. ECG’s...",
        "og:type" => "article"
    ),
    "travel" => array(
        "keywords" => "Travel Vaccination Map, Travel Vaccination, Doctors at Knox, Westfield, Knox medical center, Doctors, general practice, general practitioner, women health, sports injuries, Wantirna South, Knoxfield, Westfield Knox, medicare, bulk billing, pathology, podiatry, podiatrist",
        "description" => "Vaccinations available for all destinations Yellow Fever accredited Children's travel vaccinations available Competitive prices Detailed receipts prov...",
        "title" => "Travel Vaccination | Doctors@knox | Doctors at knox | Immunisation | Immunization",
        "og:url" => "http://doctorsatknox.com.au/?page=travel",
        "og:title" => "Travel - Westfield Knox Shopping Centre Medical Clinic",
        "og:description" => "Vaccinations available for all destinations Yellow Fever accredited Children's travel vaccinations available Competitive prices Detailed receipts prov...",
        "og:type" => "map"
    ),
    "pathology" => array(
        "keywords" => "Doctors@Knox, Doctors at Knox, Westfield, Knox medical center, Doctors, general practice, general practitioner, women health, sports injuries, Wantirna South, Knoxfield, Westfield Knox, medicare, bulk billing, pathology, podiatry, podiatrist",
        "description" => "Open weekdays from 8.30am – 1pm No appointments necessary Located within medical clinic Most Pathology services requested by our doctors are bulk-bill...",
        "title" => "Doctors@Knox | Pathology - Westfield Knox Shopping Centre Medical Clinic",
        "og:url" => "http://doctorsatknox.com.au/?page=pathology",
        "og:title" => "Pathology - Westfield Knox Shopping Centre Medical Clinic",
        "og:description" => "Open weekdays from 8.30am – 1pm No appointments necessary Located within medical clinic Most Pathology services requested by our doctors are bulk-bill...",
        "og:type" => "article"
    ),
    "contact" => array(
        "keywords" => "Doctors@Knox, Doctors at Knox, Westfield, Knox medical center, Doctors, Wantirna South, Knoxfield, Westfield Knox,, general practice, general practitioner, women health, sports injuries, medicare, bulk billing, pathology, podiatry, podiatrist",
        "description" => "Doctors at Knox Medical Center. BULK BILLING 7 DAYS PER WEEK. Appointments are made by calling the clinic on 9800 0399",
        "title" => "Doctors@Knox | CONTACT US - Westfield Knox Shopping Centre Medical Clinic",
        "og:url" => "http://doctorsatknox.com.au/?page=contact-us",
        "og:title" => "Doctors@Knox | CONTACT US - Westfield Knox Shopping Centre Medical Clinic",
        "og:description" => "Doctors at Knox Medical Center. BULK BILLING 7 DAYS PER WEEK. Appointments are made by calling the clinic on 9800 0399",
        "og:type" => ""
    ),
);

$email_config = array(
    "from"      => "From: info@doctorsatknox.com.au",
    "cc"        => "Cc: info@doctorsatknox.com.au",
    "subject"   => "Your Travel Vaccination Checklist",
    "version"   => "MIME-Version: 1.0" . "\r\n",
    "content"   => "Content-type:text/html;charset=UTF-8" . "\r\n"
);
/*
    I will usually place the following in a bootstrap file or some type of environment
    setup file (code that is run at the start of every page request), but they work 
    just as well in your config file if it's in php (some alternatives to php are xml or ini files).
*/
 
/*
    Creating constants for heavily used paths makes things a lot easier.
    ex. require_once(LIBRARY_PATH . "Paginator.php")
*/
defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
     
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
 
?>