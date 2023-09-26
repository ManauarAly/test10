@extends('admin.app')
@section('title', 'Fee Submission')
@section('main')


<style>
  @import url("https://fonts.googleapis.com/css2?family=Gabriela&family=Inter:wght@300;400;500;600;700;800&display=swap");
  .flexContent {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
  }

  :root {
    --white: #fff;
    --light: #d8dbe0;
    --dark: #28292c;
    --info: #0dcaf0;
    --primary: #f73e4c;
    --secondary:#28B95E ;
    --tertiary:#F0783C ;
    --primary-rgb: 247, 62, 76;
    --secondary-rgb: 40, 185, 94;
    --tertiary-rgb: 240, 120, 60;
    --primary-title: #38475a;
    --secondary-title: #444A51;
    --tertiary-title:#494E5C;
    --primary-paragraph: #535b61;
    --secondary-paragraph: #475467;
    --tertiary-paragraph: #475467;
    --ratting-color:#FFC107;
    --ratting-color-rgb:255, 193, 7;
    --primary-btn:var(--primary-title);
    --secondary-btn:#F5761D;
    --tertiary-btn:#304839;
    --section-bg-one:#F9F9F9;
    --section-bg-two:#202430;
    --section-bg-three:#B2DFD352;
    --primary-border: #D0D5DD;
    --secondary-border:#EDEDED;
    --tertiary-border: #D0D5DD;
    --primary-shadow: 0px 4.12121px 49.4545px rgba(0, 0, 0, 0.08);
    --secondary-shadow: 0px 4.12121px 49.4545px rgba(0, 0, 0, 0.08);
    --scrollbar-bg:#F0F0F0;
    --scrollbar-color:#c5c5c5;
    --font-awesome: "font Awesome 6 free";
    --line-awesome: "Line Awesome Free";
    --inter: "Inter", sans-serif;
    --gabriela: "Gabriela", serif;
    font-size: 14px;
    font-weight: 400;
    font-family: var(--inter);
  }

  .height-100vh {
    height: 100vh;
    color: var(--primary);
  }

  /*-- Margin Padding --*/
  /*-- Margin To-Bottom-Left-Right --*/
  .mt-6 {
    margin-top: 6px;
  }

  .mb-6 {
    margin-bottom: 6px;
  }

  .ml-6 {
    margin-left: 6px;
  }

  .mr-6 {
    margin-right: 6px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-6 {
    padding-top: 6px;
  }

  .pb-6 {
    padding-bottom: 6px;
  }

  .pl-6 {
    padding-left: 6px;
  }

  .pr-6 {
    padding-right: 6px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-7 {
    margin-top: 7px;
  }

  .mb-7 {
    margin-bottom: 7px;
  }

  .ml-7 {
    margin-left: 7px;
  }

  .mr-7 {
    margin-right: 7px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-7 {
    padding-top: 7px;
  }

  .pb-7 {
    padding-bottom: 7px;
  }

  .pl-7 {
    padding-left: 7px;
  }

  .pr-7 {
    padding-right: 7px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-8 {
    margin-top: 8px;
  }

  .mb-8 {
    margin-bottom: 8px;
  }

  .ml-8 {
    margin-left: 8px;
  }

  .mr-8 {
    margin-right: 8px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-8 {
    padding-top: 8px;
  }

  .pb-8 {
    padding-bottom: 8px;
  }

  .pl-8 {
    padding-left: 8px;
  }

  .pr-8 {
    padding-right: 8px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-9 {
    margin-top: 9px;
  }

  .mb-9 {
    margin-bottom: 9px;
  }

  .ml-9 {
    margin-left: 9px;
  }

  .mr-9 {
    margin-right: 9px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-9 {
    padding-top: 9px;
  }

  .pb-9 {
    padding-bottom: 9px;
  }

  .pl-9 {
    padding-left: 9px;
  }

  .pr-9 {
    padding-right: 9px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-10 {
    margin-top: 10px;
  }

  .mb-10 {
    margin-bottom: 10px;
  }

  .ml-10 {
    margin-left: 10px;
  }

  .mr-10 {
    margin-right: 10px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-10 {
    padding-top: 10px;
  }

  .pb-10 {
    padding-bottom: 10px;
  }

  .pl-10 {
    padding-left: 10px;
  }

  .pr-10 {
    padding-right: 10px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-11 {
    margin-top: 11px;
  }

  .mb-11 {
    margin-bottom: 11px;
  }

  .ml-11 {
    margin-left: 11px;
  }

  .mr-11 {
    margin-right: 11px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-11 {
    padding-top: 11px;
  }

  .pb-11 {
    padding-bottom: 11px;
  }

  .pl-11 {
    padding-left: 11px;
  }

  .pr-11 {
    padding-right: 11px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-12 {
    margin-top: 12px;
  }

  .mb-12 {
    margin-bottom: 12px;
  }

  .ml-12 {
    margin-left: 12px;
  }

  .mr-12 {
    margin-right: 12px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-12 {
    padding-top: 12px;
  }

  .pb-12 {
    padding-bottom: 12px;
  }

  .pl-12 {
    padding-left: 12px;
  }

  .pr-12 {
    padding-right: 12px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-13 {
    margin-top: 13px;
  }

  .mb-13 {
    margin-bottom: 13px;
  }

  .ml-13 {
    margin-left: 13px;
  }

  .mr-13 {
    margin-right: 13px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-13 {
    padding-top: 13px;
  }

  .pb-13 {
    padding-bottom: 13px;
  }

  .pl-13 {
    padding-left: 13px;
  }

  .pr-13 {
    padding-right: 13px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-14 {
    margin-top: 14px;
  }

  .mb-14 {
    margin-bottom: 14px;
  }

  .ml-14 {
    margin-left: 14px;
  }

  .mr-14 {
    margin-right: 14px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-14 {
    padding-top: 14px;
  }

  .pb-14 {
    padding-bottom: 14px;
  }

  .pl-14 {
    padding-left: 14px;
  }

  .pr-14 {
    padding-right: 14px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-15 {
    margin-top: 15px;
  }

  .mb-15 {
    margin-bottom: 15px;
  }

  .ml-15 {
    margin-left: 15px;
  }

  .mr-15 {
    margin-right: 15px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-15 {
    padding-top: 15px;
  }

  .pb-15 {
    padding-bottom: 15px;
  }

  .pl-15 {
    padding-left: 15px;
  }

  .pr-15 {
    padding-right: 15px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-16 {
    margin-top: 16px;
  }

  .mb-16 {
    margin-bottom: 16px;
  }

  .ml-16 {
    margin-left: 16px;
  }

  .mr-16 {
    margin-right: 16px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-16 {
    padding-top: 16px;
  }

  .pb-16 {
    padding-bottom: 16px;
  }

  .pl-16 {
    padding-left: 16px;
  }

  .pr-16 {
    padding-right: 16px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-17 {
    margin-top: 17px;
  }

  .mb-17 {
    margin-bottom: 17px;
  }

  .ml-17 {
    margin-left: 17px;
  }

  .mr-17 {
    margin-right: 17px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-17 {
    padding-top: 17px;
  }

  .pb-17 {
    padding-bottom: 17px;
  }

  .pl-17 {
    padding-left: 17px;
  }

  .pr-17 {
    padding-right: 17px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-18 {
    margin-top: 18px;
  }

  .mb-18 {
    margin-bottom: 18px;
  }

  .ml-18 {
    margin-left: 18px;
  }

  .mr-18 {
    margin-right: 18px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-18 {
    padding-top: 18px;
  }

  .pb-18 {
    padding-bottom: 18px;
  }

  .pl-18 {
    padding-left: 18px;
  }

  .pr-18 {
    padding-right: 18px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-19 {
    margin-top: 19px;
  }

  .mb-19 {
    margin-bottom: 19px;
  }

  .ml-19 {
    margin-left: 19px;
  }

  .mr-19 {
    margin-right: 19px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-19 {
    padding-top: 19px;
  }

  .pb-19 {
    padding-bottom: 19px;
  }

  .pl-19 {
    padding-left: 19px;
  }

  .pr-19 {
    padding-right: 19px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-20 {
    margin-top: 20px;
  }

  .mb-20 {
    margin-bottom: 20px;
  }

  .ml-20 {
    margin-left: 20px;
  }

  .mr-20 {
    margin-right: 20px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-20 {
    padding-top: 20px;
  }

  .pb-20 {
    padding-bottom: 20px;
  }

  .pl-20 {
    padding-left: 20px;
  }

  .pr-20 {
    padding-right: 20px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-21 {
    margin-top: 21px;
  }

  .mb-21 {
    margin-bottom: 21px;
  }

  .ml-21 {
    margin-left: 21px;
  }

  .mr-21 {
    margin-right: 21px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-21 {
    padding-top: 21px;
  }

  .pb-21 {
    padding-bottom: 21px;
  }

  .pl-21 {
    padding-left: 21px;
  }

  .pr-21 {
    padding-right: 21px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-22 {
    margin-top: 22px;
  }

  .mb-22 {
    margin-bottom: 22px;
  }

  .ml-22 {
    margin-left: 22px;
  }

  .mr-22 {
    margin-right: 22px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-22 {
    padding-top: 22px;
  }

  .pb-22 {
    padding-bottom: 22px;
  }

  .pl-22 {
    padding-left: 22px;
  }

  .pr-22 {
    padding-right: 22px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-23 {
    margin-top: 23px;
  }

  .mb-23 {
    margin-bottom: 23px;
  }

  .ml-23 {
    margin-left: 23px;
  }

  .mr-23 {
    margin-right: 23px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-23 {
    padding-top: 23px;
  }

  .pb-23 {
    padding-bottom: 23px;
  }

  .pl-23 {
    padding-left: 23px;
  }

  .pr-23 {
    padding-right: 23px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-24 {
    margin-top: 24px;
  }

  .mb-24 {
    margin-bottom: 24px;
  }

  .ml-24 {
    margin-left: 24px;
  }

  .mr-24 {
    margin-right: 24px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-24 {
    padding-top: 24px;
  }

  .pb-24 {
    padding-bottom: 24px;
  }

  .pl-24 {
    padding-left: 24px;
  }

  .pr-24 {
    padding-right: 24px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-25 {
    margin-top: 25px;
  }

  .mb-25 {
    margin-bottom: 25px;
  }

  .ml-25 {
    margin-left: 25px;
  }

  .mr-25 {
    margin-right: 25px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-25 {
    padding-top: 25px;
  }

  .pb-25 {
    padding-bottom: 25px;
  }

  .pl-25 {
    padding-left: 25px;
  }

  .pr-25 {
    padding-right: 25px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-26 {
    margin-top: 26px;
  }

  .mb-26 {
    margin-bottom: 26px;
  }

  .ml-26 {
    margin-left: 26px;
  }

  .mr-26 {
    margin-right: 26px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-26 {
    padding-top: 26px;
  }

  .pb-26 {
    padding-bottom: 26px;
  }

  .pl-26 {
    padding-left: 26px;
  }

  .pr-26 {
    padding-right: 26px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-27 {
    margin-top: 27px;
  }

  .mb-27 {
    margin-bottom: 27px;
  }

  .ml-27 {
    margin-left: 27px;
  }

  .mr-27 {
    margin-right: 27px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-27 {
    padding-top: 27px;
  }

  .pb-27 {
    padding-bottom: 27px;
  }

  .pl-27 {
    padding-left: 27px;
  }

  .pr-27 {
    padding-right: 27px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-28 {
    margin-top: 28px;
  }

  .mb-28 {
    margin-bottom: 28px;
  }

  .ml-28 {
    margin-left: 28px;
  }

  .mr-28 {
    margin-right: 28px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-28 {
    padding-top: 28px;
  }

  .pb-28 {
    padding-bottom: 28px;
  }

  .pl-28 {
    padding-left: 28px;
  }

  .pr-28 {
    padding-right: 28px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-29 {
    margin-top: 29px;
  }

  .mb-29 {
    margin-bottom: 29px;
  }

  .ml-29 {
    margin-left: 29px;
  }

  .mr-29 {
    margin-right: 29px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-29 {
    padding-top: 29px;
  }

  .pb-29 {
    padding-bottom: 29px;
  }

  .pl-29 {
    padding-left: 29px;
  }

  .pr-29 {
    padding-right: 29px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-30 {
    margin-top: 30px;
  }

  .mb-30 {
    margin-bottom: 30px;
  }

  .ml-30 {
    margin-left: 30px;
  }

  .mr-30 {
    margin-right: 30px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-30 {
    padding-top: 30px;
  }

  .pb-30 {
    padding-bottom: 30px;
  }

  .pl-30 {
    padding-left: 30px;
  }

  .pr-30 {
    padding-right: 30px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-31 {
    margin-top: 31px;
  }

  .mb-31 {
    margin-bottom: 31px;
  }

  .ml-31 {
    margin-left: 31px;
  }

  .mr-31 {
    margin-right: 31px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-31 {
    padding-top: 31px;
  }

  .pb-31 {
    padding-bottom: 31px;
  }

  .pl-31 {
    padding-left: 31px;
  }

  .pr-31 {
    padding-right: 31px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-32 {
    margin-top: 32px;
  }

  .mb-32 {
    margin-bottom: 32px;
  }

  .ml-32 {
    margin-left: 32px;
  }

  .mr-32 {
    margin-right: 32px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-32 {
    padding-top: 32px;
  }

  .pb-32 {
    padding-bottom: 32px;
  }

  .pl-32 {
    padding-left: 32px;
  }

  .pr-32 {
    padding-right: 32px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-33 {
    margin-top: 33px;
  }

  .mb-33 {
    margin-bottom: 33px;
  }

  .ml-33 {
    margin-left: 33px;
  }

  .mr-33 {
    margin-right: 33px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-33 {
    padding-top: 33px;
  }

  .pb-33 {
    padding-bottom: 33px;
  }

  .pl-33 {
    padding-left: 33px;
  }

  .pr-33 {
    padding-right: 33px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-34 {
    margin-top: 34px;
  }

  .mb-34 {
    margin-bottom: 34px;
  }

  .ml-34 {
    margin-left: 34px;
  }

  .mr-34 {
    margin-right: 34px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-34 {
    padding-top: 34px;
  }

  .pb-34 {
    padding-bottom: 34px;
  }

  .pl-34 {
    padding-left: 34px;
  }

  .pr-34 {
    padding-right: 34px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-35 {
    margin-top: 35px;
  }

  .mb-35 {
    margin-bottom: 35px;
  }

  .ml-35 {
    margin-left: 35px;
  }

  .mr-35 {
    margin-right: 35px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-35 {
    padding-top: 35px;
  }

  .pb-35 {
    padding-bottom: 35px;
  }

  .pl-35 {
    padding-left: 35px;
  }

  .pr-35 {
    padding-right: 35px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-36 {
    margin-top: 36px;
  }

  .mb-36 {
    margin-bottom: 36px;
  }

  .ml-36 {
    margin-left: 36px;
  }

  .mr-36 {
    margin-right: 36px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-36 {
    padding-top: 36px;
  }

  .pb-36 {
    padding-bottom: 36px;
  }

  .pl-36 {
    padding-left: 36px;
  }

  .pr-36 {
    padding-right: 36px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-37 {
    margin-top: 37px;
  }

  .mb-37 {
    margin-bottom: 37px;
  }

  .ml-37 {
    margin-left: 37px;
  }

  .mr-37 {
    margin-right: 37px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-37 {
    padding-top: 37px;
  }

  .pb-37 {
    padding-bottom: 37px;
  }

  .pl-37 {
    padding-left: 37px;
  }

  .pr-37 {
    padding-right: 37px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-38 {
    margin-top: 38px;
  }

  .mb-38 {
    margin-bottom: 38px;
  }

  .ml-38 {
    margin-left: 38px;
  }

  .mr-38 {
    margin-right: 38px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-38 {
    padding-top: 38px;
  }

  .pb-38 {
    padding-bottom: 38px;
  }

  .pl-38 {
    padding-left: 38px;
  }

  .pr-38 {
    padding-right: 38px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-39 {
    margin-top: 39px;
  }

  .mb-39 {
    margin-bottom: 39px;
  }

  .ml-39 {
    margin-left: 39px;
  }

  .mr-39 {
    margin-right: 39px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-39 {
    padding-top: 39px;
  }

  .pb-39 {
    padding-bottom: 39px;
  }

  .pl-39 {
    padding-left: 39px;
  }

  .pr-39 {
    padding-right: 39px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-40 {
    margin-top: 40px;
  }

  .mb-40 {
    margin-bottom: 40px;
  }

  .ml-40 {
    margin-left: 40px;
  }

  .mr-40 {
    margin-right: 40px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-40 {
    padding-top: 40px;
  }

  .pb-40 {
    padding-bottom: 40px;
  }

  .pl-40 {
    padding-left: 40px;
  }

  .pr-40 {
    padding-right: 40px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-41 {
    margin-top: 41px;
  }

  .mb-41 {
    margin-bottom: 41px;
  }

  .ml-41 {
    margin-left: 41px;
  }

  .mr-41 {
    margin-right: 41px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-41 {
    padding-top: 41px;
  }

  .pb-41 {
    padding-bottom: 41px;
  }

  .pl-41 {
    padding-left: 41px;
  }

  .pr-41 {
    padding-right: 41px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-42 {
    margin-top: 42px;
  }

  .mb-42 {
    margin-bottom: 42px;
  }

  .ml-42 {
    margin-left: 42px;
  }

  .mr-42 {
    margin-right: 42px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-42 {
    padding-top: 42px;
  }

  .pb-42 {
    padding-bottom: 42px;
  }

  .pl-42 {
    padding-left: 42px;
  }

  .pr-42 {
    padding-right: 42px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-43 {
    margin-top: 43px;
  }

  .mb-43 {
    margin-bottom: 43px;
  }

  .ml-43 {
    margin-left: 43px;
  }

  .mr-43 {
    margin-right: 43px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-43 {
    padding-top: 43px;
  }

  .pb-43 {
    padding-bottom: 43px;
  }

  .pl-43 {
    padding-left: 43px;
  }

  .pr-43 {
    padding-right: 43px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-44 {
    margin-top: 44px;
  }

  .mb-44 {
    margin-bottom: 44px;
  }

  .ml-44 {
    margin-left: 44px;
  }

  .mr-44 {
    margin-right: 44px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-44 {
    padding-top: 44px;
  }

  .pb-44 {
    padding-bottom: 44px;
  }

  .pl-44 {
    padding-left: 44px;
  }

  .pr-44 {
    padding-right: 44px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-45 {
    margin-top: 45px;
  }

  .mb-45 {
    margin-bottom: 45px;
  }

  .ml-45 {
    margin-left: 45px;
  }

  .mr-45 {
    margin-right: 45px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-45 {
    padding-top: 45px;
  }

  .pb-45 {
    padding-bottom: 45px;
  }

  .pl-45 {
    padding-left: 45px;
  }

  .pr-45 {
    padding-right: 45px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-46 {
    margin-top: 46px;
  }

  .mb-46 {
    margin-bottom: 46px;
  }

  .ml-46 {
    margin-left: 46px;
  }

  .mr-46 {
    margin-right: 46px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-46 {
    padding-top: 46px;
  }

  .pb-46 {
    padding-bottom: 46px;
  }

  .pl-46 {
    padding-left: 46px;
  }

  .pr-46 {
    padding-right: 46px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-47 {
    margin-top: 47px;
  }

  .mb-47 {
    margin-bottom: 47px;
  }

  .ml-47 {
    margin-left: 47px;
  }

  .mr-47 {
    margin-right: 47px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-47 {
    padding-top: 47px;
  }

  .pb-47 {
    padding-bottom: 47px;
  }

  .pl-47 {
    padding-left: 47px;
  }

  .pr-47 {
    padding-right: 47px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-48 {
    margin-top: 48px;
  }

  .mb-48 {
    margin-bottom: 48px;
  }

  .ml-48 {
    margin-left: 48px;
  }

  .mr-48 {
    margin-right: 48px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-48 {
    padding-top: 48px;
  }

  .pb-48 {
    padding-bottom: 48px;
  }

  .pl-48 {
    padding-left: 48px;
  }

  .pr-48 {
    padding-right: 48px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-49 {
    margin-top: 49px;
  }

  .mb-49 {
    margin-bottom: 49px;
  }

  .ml-49 {
    margin-left: 49px;
  }

  .mr-49 {
    margin-right: 49px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-49 {
    padding-top: 49px;
  }

  .pb-49 {
    padding-bottom: 49px;
  }

  .pl-49 {
    padding-left: 49px;
  }

  .pr-49 {
    padding-right: 49px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-50 {
    margin-top: 50px;
  }

  .mb-50 {
    margin-bottom: 50px;
  }

  .ml-50 {
    margin-left: 50px;
  }

  .mr-50 {
    margin-right: 50px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-50 {
    padding-top: 50px;
  }

  .pb-50 {
    padding-bottom: 50px;
  }

  .pl-50 {
    padding-left: 50px;
  }

  .pr-50 {
    padding-right: 50px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-51 {
    margin-top: 51px;
  }

  .mb-51 {
    margin-bottom: 51px;
  }

  .ml-51 {
    margin-left: 51px;
  }

  .mr-51 {
    margin-right: 51px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-51 {
    padding-top: 51px;
  }

  .pb-51 {
    padding-bottom: 51px;
  }

  .pl-51 {
    padding-left: 51px;
  }

  .pr-51 {
    padding-right: 51px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-52 {
    margin-top: 52px;
  }

  .mb-52 {
    margin-bottom: 52px;
  }

  .ml-52 {
    margin-left: 52px;
  }

  .mr-52 {
    margin-right: 52px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-52 {
    padding-top: 52px;
  }

  .pb-52 {
    padding-bottom: 52px;
  }

  .pl-52 {
    padding-left: 52px;
  }

  .pr-52 {
    padding-right: 52px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-53 {
    margin-top: 53px;
  }

  .mb-53 {
    margin-bottom: 53px;
  }

  .ml-53 {
    margin-left: 53px;
  }

  .mr-53 {
    margin-right: 53px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-53 {
    padding-top: 53px;
  }

  .pb-53 {
    padding-bottom: 53px;
  }

  .pl-53 {
    padding-left: 53px;
  }

  .pr-53 {
    padding-right: 53px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-54 {
    margin-top: 54px;
  }

  .mb-54 {
    margin-bottom: 54px;
  }

  .ml-54 {
    margin-left: 54px;
  }

  .mr-54 {
    margin-right: 54px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-54 {
    padding-top: 54px;
  }

  .pb-54 {
    padding-bottom: 54px;
  }

  .pl-54 {
    padding-left: 54px;
  }

  .pr-54 {
    padding-right: 54px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-55 {
    margin-top: 55px;
  }

  .mb-55 {
    margin-bottom: 55px;
  }

  .ml-55 {
    margin-left: 55px;
  }

  .mr-55 {
    margin-right: 55px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-55 {
    padding-top: 55px;
  }

  .pb-55 {
    padding-bottom: 55px;
  }

  .pl-55 {
    padding-left: 55px;
  }

  .pr-55 {
    padding-right: 55px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-56 {
    margin-top: 56px;
  }

  .mb-56 {
    margin-bottom: 56px;
  }

  .ml-56 {
    margin-left: 56px;
  }

  .mr-56 {
    margin-right: 56px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-56 {
    padding-top: 56px;
  }

  .pb-56 {
    padding-bottom: 56px;
  }

  .pl-56 {
    padding-left: 56px;
  }

  .pr-56 {
    padding-right: 56px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-57 {
    margin-top: 57px;
  }

  .mb-57 {
    margin-bottom: 57px;
  }

  .ml-57 {
    margin-left: 57px;
  }

  .mr-57 {
    margin-right: 57px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-57 {
    padding-top: 57px;
  }

  .pb-57 {
    padding-bottom: 57px;
  }

  .pl-57 {
    padding-left: 57px;
  }

  .pr-57 {
    padding-right: 57px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-58 {
    margin-top: 58px;
  }

  .mb-58 {
    margin-bottom: 58px;
  }

  .ml-58 {
    margin-left: 58px;
  }

  .mr-58 {
    margin-right: 58px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-58 {
    padding-top: 58px;
  }

  .pb-58 {
    padding-bottom: 58px;
  }

  .pl-58 {
    padding-left: 58px;
  }

  .pr-58 {
    padding-right: 58px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-59 {
    margin-top: 59px;
  }

  .mb-59 {
    margin-bottom: 59px;
  }

  .ml-59 {
    margin-left: 59px;
  }

  .mr-59 {
    margin-right: 59px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-59 {
    padding-top: 59px;
  }

  .pb-59 {
    padding-bottom: 59px;
  }

  .pl-59 {
    padding-left: 59px;
  }

  .pr-59 {
    padding-right: 59px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-60 {
    margin-top: 60px;
  }

  .mb-60 {
    margin-bottom: 60px;
  }

  .ml-60 {
    margin-left: 60px;
  }

  .mr-60 {
    margin-right: 60px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-60 {
    padding-top: 60px;
  }

  .pb-60 {
    padding-bottom: 60px;
  }

  .pl-60 {
    padding-left: 60px;
  }

  .pr-60 {
    padding-right: 60px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-61 {
    margin-top: 61px;
  }

  .mb-61 {
    margin-bottom: 61px;
  }

  .ml-61 {
    margin-left: 61px;
  }

  .mr-61 {
    margin-right: 61px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-61 {
    padding-top: 61px;
  }

  .pb-61 {
    padding-bottom: 61px;
  }

  .pl-61 {
    padding-left: 61px;
  }

  .pr-61 {
    padding-right: 61px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-62 {
    margin-top: 62px;
  }

  .mb-62 {
    margin-bottom: 62px;
  }

  .ml-62 {
    margin-left: 62px;
  }

  .mr-62 {
    margin-right: 62px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-62 {
    padding-top: 62px;
  }

  .pb-62 {
    padding-bottom: 62px;
  }

  .pl-62 {
    padding-left: 62px;
  }

  .pr-62 {
    padding-right: 62px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-63 {
    margin-top: 63px;
  }

  .mb-63 {
    margin-bottom: 63px;
  }

  .ml-63 {
    margin-left: 63px;
  }

  .mr-63 {
    margin-right: 63px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-63 {
    padding-top: 63px;
  }

  .pb-63 {
    padding-bottom: 63px;
  }

  .pl-63 {
    padding-left: 63px;
  }

  .pr-63 {
    padding-right: 63px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-64 {
    margin-top: 64px;
  }

  .mb-64 {
    margin-bottom: 64px;
  }

  .ml-64 {
    margin-left: 64px;
  }

  .mr-64 {
    margin-right: 64px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-64 {
    padding-top: 64px;
  }

  .pb-64 {
    padding-bottom: 64px;
  }

  .pl-64 {
    padding-left: 64px;
  }

  .pr-64 {
    padding-right: 64px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-65 {
    margin-top: 65px;
  }

  .mb-65 {
    margin-bottom: 65px;
  }

  .ml-65 {
    margin-left: 65px;
  }

  .mr-65 {
    margin-right: 65px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-65 {
    padding-top: 65px;
  }

  .pb-65 {
    padding-bottom: 65px;
  }

  .pl-65 {
    padding-left: 65px;
  }

  .pr-65 {
    padding-right: 65px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-66 {
    margin-top: 66px;
  }

  .mb-66 {
    margin-bottom: 66px;
  }

  .ml-66 {
    margin-left: 66px;
  }

  .mr-66 {
    margin-right: 66px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-66 {
    padding-top: 66px;
  }

  .pb-66 {
    padding-bottom: 66px;
  }

  .pl-66 {
    padding-left: 66px;
  }

  .pr-66 {
    padding-right: 66px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-67 {
    margin-top: 67px;
  }

  .mb-67 {
    margin-bottom: 67px;
  }

  .ml-67 {
    margin-left: 67px;
  }

  .mr-67 {
    margin-right: 67px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-67 {
    padding-top: 67px;
  }

  .pb-67 {
    padding-bottom: 67px;
  }

  .pl-67 {
    padding-left: 67px;
  }

  .pr-67 {
    padding-right: 67px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-68 {
    margin-top: 68px;
  }

  .mb-68 {
    margin-bottom: 68px;
  }

  .ml-68 {
    margin-left: 68px;
  }

  .mr-68 {
    margin-right: 68px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-68 {
    padding-top: 68px;
  }

  .pb-68 {
    padding-bottom: 68px;
  }

  .pl-68 {
    padding-left: 68px;
  }

  .pr-68 {
    padding-right: 68px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-69 {
    margin-top: 69px;
  }

  .mb-69 {
    margin-bottom: 69px;
  }

  .ml-69 {
    margin-left: 69px;
  }

  .mr-69 {
    margin-right: 69px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-69 {
    padding-top: 69px;
  }

  .pb-69 {
    padding-bottom: 69px;
  }

  .pl-69 {
    padding-left: 69px;
  }

  .pr-69 {
    padding-right: 69px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-70 {
    margin-top: 70px;
  }

  .mb-70 {
    margin-bottom: 70px;
  }

  .ml-70 {
    margin-left: 70px;
  }

  .mr-70 {
    margin-right: 70px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-70 {
    padding-top: 70px;
  }

  .pb-70 {
    padding-bottom: 70px;
  }

  .pl-70 {
    padding-left: 70px;
  }

  .pr-70 {
    padding-right: 70px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-71 {
    margin-top: 71px;
  }

  .mb-71 {
    margin-bottom: 71px;
  }

  .ml-71 {
    margin-left: 71px;
  }

  .mr-71 {
    margin-right: 71px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-71 {
    padding-top: 71px;
  }

  .pb-71 {
    padding-bottom: 71px;
  }

  .pl-71 {
    padding-left: 71px;
  }

  .pr-71 {
    padding-right: 71px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-72 {
    margin-top: 72px;
  }

  .mb-72 {
    margin-bottom: 72px;
  }

  .ml-72 {
    margin-left: 72px;
  }

  .mr-72 {
    margin-right: 72px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-72 {
    padding-top: 72px;
  }

  .pb-72 {
    padding-bottom: 72px;
  }

  .pl-72 {
    padding-left: 72px;
  }

  .pr-72 {
    padding-right: 72px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-73 {
    margin-top: 73px;
  }

  .mb-73 {
    margin-bottom: 73px;
  }

  .ml-73 {
    margin-left: 73px;
  }

  .mr-73 {
    margin-right: 73px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-73 {
    padding-top: 73px;
  }

  .pb-73 {
    padding-bottom: 73px;
  }

  .pl-73 {
    padding-left: 73px;
  }

  .pr-73 {
    padding-right: 73px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-74 {
    margin-top: 74px;
  }

  .mb-74 {
    margin-bottom: 74px;
  }

  .ml-74 {
    margin-left: 74px;
  }

  .mr-74 {
    margin-right: 74px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-74 {
    padding-top: 74px;
  }

  .pb-74 {
    padding-bottom: 74px;
  }

  .pl-74 {
    padding-left: 74px;
  }

  .pr-74 {
    padding-right: 74px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-75 {
    margin-top: 75px;
  }

  .mb-75 {
    margin-bottom: 75px;
  }

  .ml-75 {
    margin-left: 75px;
  }

  .mr-75 {
    margin-right: 75px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-75 {
    padding-top: 75px;
  }

  .pb-75 {
    padding-bottom: 75px;
  }

  .pl-75 {
    padding-left: 75px;
  }

  .pr-75 {
    padding-right: 75px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-76 {
    margin-top: 76px;
  }

  .mb-76 {
    margin-bottom: 76px;
  }

  .ml-76 {
    margin-left: 76px;
  }

  .mr-76 {
    margin-right: 76px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-76 {
    padding-top: 76px;
  }

  .pb-76 {
    padding-bottom: 76px;
  }

  .pl-76 {
    padding-left: 76px;
  }

  .pr-76 {
    padding-right: 76px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-77 {
    margin-top: 77px;
  }

  .mb-77 {
    margin-bottom: 77px;
  }

  .ml-77 {
    margin-left: 77px;
  }

  .mr-77 {
    margin-right: 77px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-77 {
    padding-top: 77px;
  }

  .pb-77 {
    padding-bottom: 77px;
  }

  .pl-77 {
    padding-left: 77px;
  }

  .pr-77 {
    padding-right: 77px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-78 {
    margin-top: 78px;
  }

  .mb-78 {
    margin-bottom: 78px;
  }

  .ml-78 {
    margin-left: 78px;
  }

  .mr-78 {
    margin-right: 78px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-78 {
    padding-top: 78px;
  }

  .pb-78 {
    padding-bottom: 78px;
  }

  .pl-78 {
    padding-left: 78px;
  }

  .pr-78 {
    padding-right: 78px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-79 {
    margin-top: 79px;
  }

  .mb-79 {
    margin-bottom: 79px;
  }

  .ml-79 {
    margin-left: 79px;
  }

  .mr-79 {
    margin-right: 79px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-79 {
    padding-top: 79px;
  }

  .pb-79 {
    padding-bottom: 79px;
  }

  .pl-79 {
    padding-left: 79px;
  }

  .pr-79 {
    padding-right: 79px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-80 {
    margin-top: 80px;
  }

  .mb-80 {
    margin-bottom: 80px;
  }

  .ml-80 {
    margin-left: 80px;
  }

  .mr-80 {
    margin-right: 80px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-80 {
    padding-top: 80px;
  }

  .pb-80 {
    padding-bottom: 80px;
  }

  .pl-80 {
    padding-left: 80px;
  }

  .pr-80 {
    padding-right: 80px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-81 {
    margin-top: 81px;
  }

  .mb-81 {
    margin-bottom: 81px;
  }

  .ml-81 {
    margin-left: 81px;
  }

  .mr-81 {
    margin-right: 81px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-81 {
    padding-top: 81px;
  }

  .pb-81 {
    padding-bottom: 81px;
  }

  .pl-81 {
    padding-left: 81px;
  }

  .pr-81 {
    padding-right: 81px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-82 {
    margin-top: 82px;
  }

  .mb-82 {
    margin-bottom: 82px;
  }

  .ml-82 {
    margin-left: 82px;
  }

  .mr-82 {
    margin-right: 82px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-82 {
    padding-top: 82px;
  }

  .pb-82 {
    padding-bottom: 82px;
  }

  .pl-82 {
    padding-left: 82px;
  }

  .pr-82 {
    padding-right: 82px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-83 {
    margin-top: 83px;
  }

  .mb-83 {
    margin-bottom: 83px;
  }

  .ml-83 {
    margin-left: 83px;
  }

  .mr-83 {
    margin-right: 83px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-83 {
    padding-top: 83px;
  }

  .pb-83 {
    padding-bottom: 83px;
  }

  .pl-83 {
    padding-left: 83px;
  }

  .pr-83 {
    padding-right: 83px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-84 {
    margin-top: 84px;
  }

  .mb-84 {
    margin-bottom: 84px;
  }

  .ml-84 {
    margin-left: 84px;
  }

  .mr-84 {
    margin-right: 84px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-84 {
    padding-top: 84px;
  }

  .pb-84 {
    padding-bottom: 84px;
  }

  .pl-84 {
    padding-left: 84px;
  }

  .pr-84 {
    padding-right: 84px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-85 {
    margin-top: 85px;
  }

  .mb-85 {
    margin-bottom: 85px;
  }

  .ml-85 {
    margin-left: 85px;
  }

  .mr-85 {
    margin-right: 85px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-85 {
    padding-top: 85px;
  }

  .pb-85 {
    padding-bottom: 85px;
  }

  .pl-85 {
    padding-left: 85px;
  }

  .pr-85 {
    padding-right: 85px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-86 {
    margin-top: 86px;
  }

  .mb-86 {
    margin-bottom: 86px;
  }

  .ml-86 {
    margin-left: 86px;
  }

  .mr-86 {
    margin-right: 86px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-86 {
    padding-top: 86px;
  }

  .pb-86 {
    padding-bottom: 86px;
  }

  .pl-86 {
    padding-left: 86px;
  }

  .pr-86 {
    padding-right: 86px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-87 {
    margin-top: 87px;
  }

  .mb-87 {
    margin-bottom: 87px;
  }

  .ml-87 {
    margin-left: 87px;
  }

  .mr-87 {
    margin-right: 87px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-87 {
    padding-top: 87px;
  }

  .pb-87 {
    padding-bottom: 87px;
  }

  .pl-87 {
    padding-left: 87px;
  }

  .pr-87 {
    padding-right: 87px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-88 {
    margin-top: 88px;
  }

  .mb-88 {
    margin-bottom: 88px;
  }

  .ml-88 {
    margin-left: 88px;
  }

  .mr-88 {
    margin-right: 88px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-88 {
    padding-top: 88px;
  }

  .pb-88 {
    padding-bottom: 88px;
  }

  .pl-88 {
    padding-left: 88px;
  }

  .pr-88 {
    padding-right: 88px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-89 {
    margin-top: 89px;
  }

  .mb-89 {
    margin-bottom: 89px;
  }

  .ml-89 {
    margin-left: 89px;
  }

  .mr-89 {
    margin-right: 89px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-89 {
    padding-top: 89px;
  }

  .pb-89 {
    padding-bottom: 89px;
  }

  .pl-89 {
    padding-left: 89px;
  }

  .pr-89 {
    padding-right: 89px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-90 {
    margin-top: 90px;
  }

  .mb-90 {
    margin-bottom: 90px;
  }

  .ml-90 {
    margin-left: 90px;
  }

  .mr-90 {
    margin-right: 90px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-90 {
    padding-top: 90px;
  }

  .pb-90 {
    padding-bottom: 90px;
  }

  .pl-90 {
    padding-left: 90px;
  }

  .pr-90 {
    padding-right: 90px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-91 {
    margin-top: 91px;
  }

  .mb-91 {
    margin-bottom: 91px;
  }

  .ml-91 {
    margin-left: 91px;
  }

  .mr-91 {
    margin-right: 91px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-91 {
    padding-top: 91px;
  }

  .pb-91 {
    padding-bottom: 91px;
  }

  .pl-91 {
    padding-left: 91px;
  }

  .pr-91 {
    padding-right: 91px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-92 {
    margin-top: 92px;
  }

  .mb-92 {
    margin-bottom: 92px;
  }

  .ml-92 {
    margin-left: 92px;
  }

  .mr-92 {
    margin-right: 92px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-92 {
    padding-top: 92px;
  }

  .pb-92 {
    padding-bottom: 92px;
  }

  .pl-92 {
    padding-left: 92px;
  }

  .pr-92 {
    padding-right: 92px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-93 {
    margin-top: 93px;
  }

  .mb-93 {
    margin-bottom: 93px;
  }

  .ml-93 {
    margin-left: 93px;
  }

  .mr-93 {
    margin-right: 93px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-93 {
    padding-top: 93px;
  }

  .pb-93 {
    padding-bottom: 93px;
  }

  .pl-93 {
    padding-left: 93px;
  }

  .pr-93 {
    padding-right: 93px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-94 {
    margin-top: 94px;
  }

  .mb-94 {
    margin-bottom: 94px;
  }

  .ml-94 {
    margin-left: 94px;
  }

  .mr-94 {
    margin-right: 94px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-94 {
    padding-top: 94px;
  }

  .pb-94 {
    padding-bottom: 94px;
  }

  .pl-94 {
    padding-left: 94px;
  }

  .pr-94 {
    padding-right: 94px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-95 {
    margin-top: 95px;
  }

  .mb-95 {
    margin-bottom: 95px;
  }

  .ml-95 {
    margin-left: 95px;
  }

  .mr-95 {
    margin-right: 95px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-95 {
    padding-top: 95px;
  }

  .pb-95 {
    padding-bottom: 95px;
  }

  .pl-95 {
    padding-left: 95px;
  }

  .pr-95 {
    padding-right: 95px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-96 {
    margin-top: 96px;
  }

  .mb-96 {
    margin-bottom: 96px;
  }

  .ml-96 {
    margin-left: 96px;
  }

  .mr-96 {
    margin-right: 96px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-96 {
    padding-top: 96px;
  }

  .pb-96 {
    padding-bottom: 96px;
  }

  .pl-96 {
    padding-left: 96px;
  }

  .pr-96 {
    padding-right: 96px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-97 {
    margin-top: 97px;
  }

  .mb-97 {
    margin-bottom: 97px;
  }

  .ml-97 {
    margin-left: 97px;
  }

  .mr-97 {
    margin-right: 97px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-97 {
    padding-top: 97px;
  }

  .pb-97 {
    padding-bottom: 97px;
  }

  .pl-97 {
    padding-left: 97px;
  }

  .pr-97 {
    padding-right: 97px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-98 {
    margin-top: 98px;
  }

  .mb-98 {
    margin-bottom: 98px;
  }

  .ml-98 {
    margin-left: 98px;
  }

  .mr-98 {
    margin-right: 98px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-98 {
    padding-top: 98px;
  }

  .pb-98 {
    padding-bottom: 98px;
  }

  .pl-98 {
    padding-left: 98px;
  }

  .pr-98 {
    padding-right: 98px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-99 {
    margin-top: 99px;
  }

  .mb-99 {
    margin-bottom: 99px;
  }

  .ml-99 {
    margin-left: 99px;
  }

  .mr-99 {
    margin-right: 99px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-99 {
    padding-top: 99px;
  }

  .pb-99 {
    padding-bottom: 99px;
  }

  .pl-99 {
    padding-left: 99px;
  }

  .pr-99 {
    padding-right: 99px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-100 {
    margin-top: 100px;
  }

  .mb-100 {
    margin-bottom: 100px;
  }

  .ml-100 {
    margin-left: 100px;
  }

  .mr-100 {
    margin-right: 100px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-100 {
    padding-top: 100px;
  }

  .pb-100 {
    padding-bottom: 100px;
  }

  .pl-100 {
    padding-left: 100px;
  }

  .pr-100 {
    padding-right: 100px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-101 {
    margin-top: 101px;
  }

  .mb-101 {
    margin-bottom: 101px;
  }

  .ml-101 {
    margin-left: 101px;
  }

  .mr-101 {
    margin-right: 101px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-101 {
    padding-top: 101px;
  }

  .pb-101 {
    padding-bottom: 101px;
  }

  .pl-101 {
    padding-left: 101px;
  }

  .pr-101 {
    padding-right: 101px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-102 {
    margin-top: 102px;
  }

  .mb-102 {
    margin-bottom: 102px;
  }

  .ml-102 {
    margin-left: 102px;
  }

  .mr-102 {
    margin-right: 102px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-102 {
    padding-top: 102px;
  }

  .pb-102 {
    padding-bottom: 102px;
  }

  .pl-102 {
    padding-left: 102px;
  }

  .pr-102 {
    padding-right: 102px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-103 {
    margin-top: 103px;
  }

  .mb-103 {
    margin-bottom: 103px;
  }

  .ml-103 {
    margin-left: 103px;
  }

  .mr-103 {
    margin-right: 103px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-103 {
    padding-top: 103px;
  }

  .pb-103 {
    padding-bottom: 103px;
  }

  .pl-103 {
    padding-left: 103px;
  }

  .pr-103 {
    padding-right: 103px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-104 {
    margin-top: 104px;
  }

  .mb-104 {
    margin-bottom: 104px;
  }

  .ml-104 {
    margin-left: 104px;
  }

  .mr-104 {
    margin-right: 104px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-104 {
    padding-top: 104px;
  }

  .pb-104 {
    padding-bottom: 104px;
  }

  .pl-104 {
    padding-left: 104px;
  }

  .pr-104 {
    padding-right: 104px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-105 {
    margin-top: 105px;
  }

  .mb-105 {
    margin-bottom: 105px;
  }

  .ml-105 {
    margin-left: 105px;
  }

  .mr-105 {
    margin-right: 105px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-105 {
    padding-top: 105px;
  }

  .pb-105 {
    padding-bottom: 105px;
  }

  .pl-105 {
    padding-left: 105px;
  }

  .pr-105 {
    padding-right: 105px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-106 {
    margin-top: 106px;
  }

  .mb-106 {
    margin-bottom: 106px;
  }

  .ml-106 {
    margin-left: 106px;
  }

  .mr-106 {
    margin-right: 106px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-106 {
    padding-top: 106px;
  }

  .pb-106 {
    padding-bottom: 106px;
  }

  .pl-106 {
    padding-left: 106px;
  }

  .pr-106 {
    padding-right: 106px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-107 {
    margin-top: 107px;
  }

  .mb-107 {
    margin-bottom: 107px;
  }

  .ml-107 {
    margin-left: 107px;
  }

  .mr-107 {
    margin-right: 107px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-107 {
    padding-top: 107px;
  }

  .pb-107 {
    padding-bottom: 107px;
  }

  .pl-107 {
    padding-left: 107px;
  }

  .pr-107 {
    padding-right: 107px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-108 {
    margin-top: 108px;
  }

  .mb-108 {
    margin-bottom: 108px;
  }

  .ml-108 {
    margin-left: 108px;
  }

  .mr-108 {
    margin-right: 108px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-108 {
    padding-top: 108px;
  }

  .pb-108 {
    padding-bottom: 108px;
  }

  .pl-108 {
    padding-left: 108px;
  }

  .pr-108 {
    padding-right: 108px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-109 {
    margin-top: 109px;
  }

  .mb-109 {
    margin-bottom: 109px;
  }

  .ml-109 {
    margin-left: 109px;
  }

  .mr-109 {
    margin-right: 109px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-109 {
    padding-top: 109px;
  }

  .pb-109 {
    padding-bottom: 109px;
  }

  .pl-109 {
    padding-left: 109px;
  }

  .pr-109 {
    padding-right: 109px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-110 {
    margin-top: 110px;
  }

  .mb-110 {
    margin-bottom: 110px;
  }

  .ml-110 {
    margin-left: 110px;
  }

  .mr-110 {
    margin-right: 110px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-110 {
    padding-top: 110px;
  }

  .pb-110 {
    padding-bottom: 110px;
  }

  .pl-110 {
    padding-left: 110px;
  }

  .pr-110 {
    padding-right: 110px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-111 {
    margin-top: 111px;
  }

  .mb-111 {
    margin-bottom: 111px;
  }

  .ml-111 {
    margin-left: 111px;
  }

  .mr-111 {
    margin-right: 111px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-111 {
    padding-top: 111px;
  }

  .pb-111 {
    padding-bottom: 111px;
  }

  .pl-111 {
    padding-left: 111px;
  }

  .pr-111 {
    padding-right: 111px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-112 {
    margin-top: 112px;
  }

  .mb-112 {
    margin-bottom: 112px;
  }

  .ml-112 {
    margin-left: 112px;
  }

  .mr-112 {
    margin-right: 112px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-112 {
    padding-top: 112px;
  }

  .pb-112 {
    padding-bottom: 112px;
  }

  .pl-112 {
    padding-left: 112px;
  }

  .pr-112 {
    padding-right: 112px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-113 {
    margin-top: 113px;
  }

  .mb-113 {
    margin-bottom: 113px;
  }

  .ml-113 {
    margin-left: 113px;
  }

  .mr-113 {
    margin-right: 113px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-113 {
    padding-top: 113px;
  }

  .pb-113 {
    padding-bottom: 113px;
  }

  .pl-113 {
    padding-left: 113px;
  }

  .pr-113 {
    padding-right: 113px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-114 {
    margin-top: 114px;
  }

  .mb-114 {
    margin-bottom: 114px;
  }

  .ml-114 {
    margin-left: 114px;
  }

  .mr-114 {
    margin-right: 114px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-114 {
    padding-top: 114px;
  }

  .pb-114 {
    padding-bottom: 114px;
  }

  .pl-114 {
    padding-left: 114px;
  }

  .pr-114 {
    padding-right: 114px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-115 {
    margin-top: 115px;
  }

  .mb-115 {
    margin-bottom: 115px;
  }

  .ml-115 {
    margin-left: 115px;
  }

  .mr-115 {
    margin-right: 115px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-115 {
    padding-top: 115px;
  }

  .pb-115 {
    padding-bottom: 115px;
  }

  .pl-115 {
    padding-left: 115px;
  }

  .pr-115 {
    padding-right: 115px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-116 {
    margin-top: 116px;
  }

  .mb-116 {
    margin-bottom: 116px;
  }

  .ml-116 {
    margin-left: 116px;
  }

  .mr-116 {
    margin-right: 116px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-116 {
    padding-top: 116px;
  }

  .pb-116 {
    padding-bottom: 116px;
  }

  .pl-116 {
    padding-left: 116px;
  }

  .pr-116 {
    padding-right: 116px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-117 {
    margin-top: 117px;
  }

  .mb-117 {
    margin-bottom: 117px;
  }

  .ml-117 {
    margin-left: 117px;
  }

  .mr-117 {
    margin-right: 117px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-117 {
    padding-top: 117px;
  }

  .pb-117 {
    padding-bottom: 117px;
  }

  .pl-117 {
    padding-left: 117px;
  }

  .pr-117 {
    padding-right: 117px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-118 {
    margin-top: 118px;
  }

  .mb-118 {
    margin-bottom: 118px;
  }

  .ml-118 {
    margin-left: 118px;
  }

  .mr-118 {
    margin-right: 118px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-118 {
    padding-top: 118px;
  }

  .pb-118 {
    padding-bottom: 118px;
  }

  .pl-118 {
    padding-left: 118px;
  }

  .pr-118 {
    padding-right: 118px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-119 {
    margin-top: 119px;
  }

  .mb-119 {
    margin-bottom: 119px;
  }

  .ml-119 {
    margin-left: 119px;
  }

  .mr-119 {
    margin-right: 119px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-119 {
    padding-top: 119px;
  }

  .pb-119 {
    padding-bottom: 119px;
  }

  .pl-119 {
    padding-left: 119px;
  }

  .pr-119 {
    padding-right: 119px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-120 {
    margin-top: 120px;
  }

  .mb-120 {
    margin-bottom: 120px;
  }

  .ml-120 {
    margin-left: 120px;
  }

  .mr-120 {
    margin-right: 120px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-120 {
    padding-top: 120px;
  }

  .pb-120 {
    padding-bottom: 120px;
  }

  .pl-120 {
    padding-left: 120px;
  }

  .pr-120 {
    padding-right: 120px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-121 {
    margin-top: 121px;
  }

  .mb-121 {
    margin-bottom: 121px;
  }

  .ml-121 {
    margin-left: 121px;
  }

  .mr-121 {
    margin-right: 121px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-121 {
    padding-top: 121px;
  }

  .pb-121 {
    padding-bottom: 121px;
  }

  .pl-121 {
    padding-left: 121px;
  }

  .pr-121 {
    padding-right: 121px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-122 {
    margin-top: 122px;
  }

  .mb-122 {
    margin-bottom: 122px;
  }

  .ml-122 {
    margin-left: 122px;
  }

  .mr-122 {
    margin-right: 122px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-122 {
    padding-top: 122px;
  }

  .pb-122 {
    padding-bottom: 122px;
  }

  .pl-122 {
    padding-left: 122px;
  }

  .pr-122 {
    padding-right: 122px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-123 {
    margin-top: 123px;
  }

  .mb-123 {
    margin-bottom: 123px;
  }

  .ml-123 {
    margin-left: 123px;
  }

  .mr-123 {
    margin-right: 123px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-123 {
    padding-top: 123px;
  }

  .pb-123 {
    padding-bottom: 123px;
  }

  .pl-123 {
    padding-left: 123px;
  }

  .pr-123 {
    padding-right: 123px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-124 {
    margin-top: 124px;
  }

  .mb-124 {
    margin-bottom: 124px;
  }

  .ml-124 {
    margin-left: 124px;
  }

  .mr-124 {
    margin-right: 124px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-124 {
    padding-top: 124px;
  }

  .pb-124 {
    padding-bottom: 124px;
  }

  .pl-124 {
    padding-left: 124px;
  }

  .pr-124 {
    padding-right: 124px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-125 {
    margin-top: 125px;
  }

  .mb-125 {
    margin-bottom: 125px;
  }

  .ml-125 {
    margin-left: 125px;
  }

  .mr-125 {
    margin-right: 125px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-125 {
    padding-top: 125px;
  }

  .pb-125 {
    padding-bottom: 125px;
  }

  .pl-125 {
    padding-left: 125px;
  }

  .pr-125 {
    padding-right: 125px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-126 {
    margin-top: 126px;
  }

  .mb-126 {
    margin-bottom: 126px;
  }

  .ml-126 {
    margin-left: 126px;
  }

  .mr-126 {
    margin-right: 126px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-126 {
    padding-top: 126px;
  }

  .pb-126 {
    padding-bottom: 126px;
  }

  .pl-126 {
    padding-left: 126px;
  }

  .pr-126 {
    padding-right: 126px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-127 {
    margin-top: 127px;
  }

  .mb-127 {
    margin-bottom: 127px;
  }

  .ml-127 {
    margin-left: 127px;
  }

  .mr-127 {
    margin-right: 127px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-127 {
    padding-top: 127px;
  }

  .pb-127 {
    padding-bottom: 127px;
  }

  .pl-127 {
    padding-left: 127px;
  }

  .pr-127 {
    padding-right: 127px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-128 {
    margin-top: 128px;
  }

  .mb-128 {
    margin-bottom: 128px;
  }

  .ml-128 {
    margin-left: 128px;
  }

  .mr-128 {
    margin-right: 128px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-128 {
    padding-top: 128px;
  }

  .pb-128 {
    padding-bottom: 128px;
  }

  .pl-128 {
    padding-left: 128px;
  }

  .pr-128 {
    padding-right: 128px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-129 {
    margin-top: 129px;
  }

  .mb-129 {
    margin-bottom: 129px;
  }

  .ml-129 {
    margin-left: 129px;
  }

  .mr-129 {
    margin-right: 129px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-129 {
    padding-top: 129px;
  }

  .pb-129 {
    padding-bottom: 129px;
  }

  .pl-129 {
    padding-left: 129px;
  }

  .pr-129 {
    padding-right: 129px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-130 {
    margin-top: 130px;
  }

  .mb-130 {
    margin-bottom: 130px;
  }

  .ml-130 {
    margin-left: 130px;
  }

  .mr-130 {
    margin-right: 130px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-130 {
    padding-top: 130px;
  }

  .pb-130 {
    padding-bottom: 130px;
  }

  .pl-130 {
    padding-left: 130px;
  }

  .pr-130 {
    padding-right: 130px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-131 {
    margin-top: 131px;
  }

  .mb-131 {
    margin-bottom: 131px;
  }

  .ml-131 {
    margin-left: 131px;
  }

  .mr-131 {
    margin-right: 131px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-131 {
    padding-top: 131px;
  }

  .pb-131 {
    padding-bottom: 131px;
  }

  .pl-131 {
    padding-left: 131px;
  }

  .pr-131 {
    padding-right: 131px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-132 {
    margin-top: 132px;
  }

  .mb-132 {
    margin-bottom: 132px;
  }

  .ml-132 {
    margin-left: 132px;
  }

  .mr-132 {
    margin-right: 132px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-132 {
    padding-top: 132px;
  }

  .pb-132 {
    padding-bottom: 132px;
  }

  .pl-132 {
    padding-left: 132px;
  }

  .pr-132 {
    padding-right: 132px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-133 {
    margin-top: 133px;
  }

  .mb-133 {
    margin-bottom: 133px;
  }

  .ml-133 {
    margin-left: 133px;
  }

  .mr-133 {
    margin-right: 133px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-133 {
    padding-top: 133px;
  }

  .pb-133 {
    padding-bottom: 133px;
  }

  .pl-133 {
    padding-left: 133px;
  }

  .pr-133 {
    padding-right: 133px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-134 {
    margin-top: 134px;
  }

  .mb-134 {
    margin-bottom: 134px;
  }

  .ml-134 {
    margin-left: 134px;
  }

  .mr-134 {
    margin-right: 134px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-134 {
    padding-top: 134px;
  }

  .pb-134 {
    padding-bottom: 134px;
  }

  .pl-134 {
    padding-left: 134px;
  }

  .pr-134 {
    padding-right: 134px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-135 {
    margin-top: 135px;
  }

  .mb-135 {
    margin-bottom: 135px;
  }

  .ml-135 {
    margin-left: 135px;
  }

  .mr-135 {
    margin-right: 135px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-135 {
    padding-top: 135px;
  }

  .pb-135 {
    padding-bottom: 135px;
  }

  .pl-135 {
    padding-left: 135px;
  }

  .pr-135 {
    padding-right: 135px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-136 {
    margin-top: 136px;
  }

  .mb-136 {
    margin-bottom: 136px;
  }

  .ml-136 {
    margin-left: 136px;
  }

  .mr-136 {
    margin-right: 136px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-136 {
    padding-top: 136px;
  }

  .pb-136 {
    padding-bottom: 136px;
  }

  .pl-136 {
    padding-left: 136px;
  }

  .pr-136 {
    padding-right: 136px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-137 {
    margin-top: 137px;
  }

  .mb-137 {
    margin-bottom: 137px;
  }

  .ml-137 {
    margin-left: 137px;
  }

  .mr-137 {
    margin-right: 137px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-137 {
    padding-top: 137px;
  }

  .pb-137 {
    padding-bottom: 137px;
  }

  .pl-137 {
    padding-left: 137px;
  }

  .pr-137 {
    padding-right: 137px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-138 {
    margin-top: 138px;
  }

  .mb-138 {
    margin-bottom: 138px;
  }

  .ml-138 {
    margin-left: 138px;
  }

  .mr-138 {
    margin-right: 138px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-138 {
    padding-top: 138px;
  }

  .pb-138 {
    padding-bottom: 138px;
  }

  .pl-138 {
    padding-left: 138px;
  }

  .pr-138 {
    padding-right: 138px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-139 {
    margin-top: 139px;
  }

  .mb-139 {
    margin-bottom: 139px;
  }

  .ml-139 {
    margin-left: 139px;
  }

  .mr-139 {
    margin-right: 139px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-139 {
    padding-top: 139px;
  }

  .pb-139 {
    padding-bottom: 139px;
  }

  .pl-139 {
    padding-left: 139px;
  }

  .pr-139 {
    padding-right: 139px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-140 {
    margin-top: 140px;
  }

  .mb-140 {
    margin-bottom: 140px;
  }

  .ml-140 {
    margin-left: 140px;
  }

  .mr-140 {
    margin-right: 140px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-140 {
    padding-top: 140px;
  }

  .pb-140 {
    padding-bottom: 140px;
  }

  .pl-140 {
    padding-left: 140px;
  }

  .pr-140 {
    padding-right: 140px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-141 {
    margin-top: 141px;
  }

  .mb-141 {
    margin-bottom: 141px;
  }

  .ml-141 {
    margin-left: 141px;
  }

  .mr-141 {
    margin-right: 141px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-141 {
    padding-top: 141px;
  }

  .pb-141 {
    padding-bottom: 141px;
  }

  .pl-141 {
    padding-left: 141px;
  }

  .pr-141 {
    padding-right: 141px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-142 {
    margin-top: 142px;
  }

  .mb-142 {
    margin-bottom: 142px;
  }

  .ml-142 {
    margin-left: 142px;
  }

  .mr-142 {
    margin-right: 142px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-142 {
    padding-top: 142px;
  }

  .pb-142 {
    padding-bottom: 142px;
  }

  .pl-142 {
    padding-left: 142px;
  }

  .pr-142 {
    padding-right: 142px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-143 {
    margin-top: 143px;
  }

  .mb-143 {
    margin-bottom: 143px;
  }

  .ml-143 {
    margin-left: 143px;
  }

  .mr-143 {
    margin-right: 143px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-143 {
    padding-top: 143px;
  }

  .pb-143 {
    padding-bottom: 143px;
  }

  .pl-143 {
    padding-left: 143px;
  }

  .pr-143 {
    padding-right: 143px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-144 {
    margin-top: 144px;
  }

  .mb-144 {
    margin-bottom: 144px;
  }

  .ml-144 {
    margin-left: 144px;
  }

  .mr-144 {
    margin-right: 144px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-144 {
    padding-top: 144px;
  }

  .pb-144 {
    padding-bottom: 144px;
  }

  .pl-144 {
    padding-left: 144px;
  }

  .pr-144 {
    padding-right: 144px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-145 {
    margin-top: 145px;
  }

  .mb-145 {
    margin-bottom: 145px;
  }

  .ml-145 {
    margin-left: 145px;
  }

  .mr-145 {
    margin-right: 145px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-145 {
    padding-top: 145px;
  }

  .pb-145 {
    padding-bottom: 145px;
  }

  .pl-145 {
    padding-left: 145px;
  }

  .pr-145 {
    padding-right: 145px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-146 {
    margin-top: 146px;
  }

  .mb-146 {
    margin-bottom: 146px;
  }

  .ml-146 {
    margin-left: 146px;
  }

  .mr-146 {
    margin-right: 146px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-146 {
    padding-top: 146px;
  }

  .pb-146 {
    padding-bottom: 146px;
  }

  .pl-146 {
    padding-left: 146px;
  }

  .pr-146 {
    padding-right: 146px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-147 {
    margin-top: 147px;
  }

  .mb-147 {
    margin-bottom: 147px;
  }

  .ml-147 {
    margin-left: 147px;
  }

  .mr-147 {
    margin-right: 147px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-147 {
    padding-top: 147px;
  }

  .pb-147 {
    padding-bottom: 147px;
  }

  .pl-147 {
    padding-left: 147px;
  }

  .pr-147 {
    padding-right: 147px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-148 {
    margin-top: 148px;
  }

  .mb-148 {
    margin-bottom: 148px;
  }

  .ml-148 {
    margin-left: 148px;
  }

  .mr-148 {
    margin-right: 148px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-148 {
    padding-top: 148px;
  }

  .pb-148 {
    padding-bottom: 148px;
  }

  .pl-148 {
    padding-left: 148px;
  }

  .pr-148 {
    padding-right: 148px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-149 {
    margin-top: 149px;
  }

  .mb-149 {
    margin-bottom: 149px;
  }

  .ml-149 {
    margin-left: 149px;
  }

  .mr-149 {
    margin-right: 149px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-149 {
    padding-top: 149px;
  }

  .pb-149 {
    padding-bottom: 149px;
  }

  .pl-149 {
    padding-left: 149px;
  }

  .pr-149 {
    padding-right: 149px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-150 {
    margin-top: 150px;
  }

  .mb-150 {
    margin-bottom: 150px;
  }

  .ml-150 {
    margin-left: 150px;
  }

  .mr-150 {
    margin-right: 150px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-150 {
    padding-top: 150px;
  }

  .pb-150 {
    padding-bottom: 150px;
  }

  .pl-150 {
    padding-left: 150px;
  }

  .pr-150 {
    padding-right: 150px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-151 {
    margin-top: 151px;
  }

  .mb-151 {
    margin-bottom: 151px;
  }

  .ml-151 {
    margin-left: 151px;
  }

  .mr-151 {
    margin-right: 151px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-151 {
    padding-top: 151px;
  }

  .pb-151 {
    padding-bottom: 151px;
  }

  .pl-151 {
    padding-left: 151px;
  }

  .pr-151 {
    padding-right: 151px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-152 {
    margin-top: 152px;
  }

  .mb-152 {
    margin-bottom: 152px;
  }

  .ml-152 {
    margin-left: 152px;
  }

  .mr-152 {
    margin-right: 152px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-152 {
    padding-top: 152px;
  }

  .pb-152 {
    padding-bottom: 152px;
  }

  .pl-152 {
    padding-left: 152px;
  }

  .pr-152 {
    padding-right: 152px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-153 {
    margin-top: 153px;
  }

  .mb-153 {
    margin-bottom: 153px;
  }

  .ml-153 {
    margin-left: 153px;
  }

  .mr-153 {
    margin-right: 153px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-153 {
    padding-top: 153px;
  }

  .pb-153 {
    padding-bottom: 153px;
  }

  .pl-153 {
    padding-left: 153px;
  }

  .pr-153 {
    padding-right: 153px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-154 {
    margin-top: 154px;
  }

  .mb-154 {
    margin-bottom: 154px;
  }

  .ml-154 {
    margin-left: 154px;
  }

  .mr-154 {
    margin-right: 154px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-154 {
    padding-top: 154px;
  }

  .pb-154 {
    padding-bottom: 154px;
  }

  .pl-154 {
    padding-left: 154px;
  }

  .pr-154 {
    padding-right: 154px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-155 {
    margin-top: 155px;
  }

  .mb-155 {
    margin-bottom: 155px;
  }

  .ml-155 {
    margin-left: 155px;
  }

  .mr-155 {
    margin-right: 155px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-155 {
    padding-top: 155px;
  }

  .pb-155 {
    padding-bottom: 155px;
  }

  .pl-155 {
    padding-left: 155px;
  }

  .pr-155 {
    padding-right: 155px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-156 {
    margin-top: 156px;
  }

  .mb-156 {
    margin-bottom: 156px;
  }

  .ml-156 {
    margin-left: 156px;
  }

  .mr-156 {
    margin-right: 156px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-156 {
    padding-top: 156px;
  }

  .pb-156 {
    padding-bottom: 156px;
  }

  .pl-156 {
    padding-left: 156px;
  }

  .pr-156 {
    padding-right: 156px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-157 {
    margin-top: 157px;
  }

  .mb-157 {
    margin-bottom: 157px;
  }

  .ml-157 {
    margin-left: 157px;
  }

  .mr-157 {
    margin-right: 157px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-157 {
    padding-top: 157px;
  }

  .pb-157 {
    padding-bottom: 157px;
  }

  .pl-157 {
    padding-left: 157px;
  }

  .pr-157 {
    padding-right: 157px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-158 {
    margin-top: 158px;
  }

  .mb-158 {
    margin-bottom: 158px;
  }

  .ml-158 {
    margin-left: 158px;
  }

  .mr-158 {
    margin-right: 158px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-158 {
    padding-top: 158px;
  }

  .pb-158 {
    padding-bottom: 158px;
  }

  .pl-158 {
    padding-left: 158px;
  }

  .pr-158 {
    padding-right: 158px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-159 {
    margin-top: 159px;
  }

  .mb-159 {
    margin-bottom: 159px;
  }

  .ml-159 {
    margin-left: 159px;
  }

  .mr-159 {
    margin-right: 159px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-159 {
    padding-top: 159px;
  }

  .pb-159 {
    padding-bottom: 159px;
  }

  .pl-159 {
    padding-left: 159px;
  }

  .pr-159 {
    padding-right: 159px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-160 {
    margin-top: 160px;
  }

  .mb-160 {
    margin-bottom: 160px;
  }

  .ml-160 {
    margin-left: 160px;
  }

  .mr-160 {
    margin-right: 160px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-160 {
    padding-top: 160px;
  }

  .pb-160 {
    padding-bottom: 160px;
  }

  .pl-160 {
    padding-left: 160px;
  }

  .pr-160 {
    padding-right: 160px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-161 {
    margin-top: 161px;
  }

  .mb-161 {
    margin-bottom: 161px;
  }

  .ml-161 {
    margin-left: 161px;
  }

  .mr-161 {
    margin-right: 161px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-161 {
    padding-top: 161px;
  }

  .pb-161 {
    padding-bottom: 161px;
  }

  .pl-161 {
    padding-left: 161px;
  }

  .pr-161 {
    padding-right: 161px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-162 {
    margin-top: 162px;
  }

  .mb-162 {
    margin-bottom: 162px;
  }

  .ml-162 {
    margin-left: 162px;
  }

  .mr-162 {
    margin-right: 162px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-162 {
    padding-top: 162px;
  }

  .pb-162 {
    padding-bottom: 162px;
  }

  .pl-162 {
    padding-left: 162px;
  }

  .pr-162 {
    padding-right: 162px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-163 {
    margin-top: 163px;
  }

  .mb-163 {
    margin-bottom: 163px;
  }

  .ml-163 {
    margin-left: 163px;
  }

  .mr-163 {
    margin-right: 163px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-163 {
    padding-top: 163px;
  }

  .pb-163 {
    padding-bottom: 163px;
  }

  .pl-163 {
    padding-left: 163px;
  }

  .pr-163 {
    padding-right: 163px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-164 {
    margin-top: 164px;
  }

  .mb-164 {
    margin-bottom: 164px;
  }

  .ml-164 {
    margin-left: 164px;
  }

  .mr-164 {
    margin-right: 164px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-164 {
    padding-top: 164px;
  }

  .pb-164 {
    padding-bottom: 164px;
  }

  .pl-164 {
    padding-left: 164px;
  }

  .pr-164 {
    padding-right: 164px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-165 {
    margin-top: 165px;
  }

  .mb-165 {
    margin-bottom: 165px;
  }

  .ml-165 {
    margin-left: 165px;
  }

  .mr-165 {
    margin-right: 165px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-165 {
    padding-top: 165px;
  }

  .pb-165 {
    padding-bottom: 165px;
  }

  .pl-165 {
    padding-left: 165px;
  }

  .pr-165 {
    padding-right: 165px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-166 {
    margin-top: 166px;
  }

  .mb-166 {
    margin-bottom: 166px;
  }

  .ml-166 {
    margin-left: 166px;
  }

  .mr-166 {
    margin-right: 166px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-166 {
    padding-top: 166px;
  }

  .pb-166 {
    padding-bottom: 166px;
  }

  .pl-166 {
    padding-left: 166px;
  }

  .pr-166 {
    padding-right: 166px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-167 {
    margin-top: 167px;
  }

  .mb-167 {
    margin-bottom: 167px;
  }

  .ml-167 {
    margin-left: 167px;
  }

  .mr-167 {
    margin-right: 167px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-167 {
    padding-top: 167px;
  }

  .pb-167 {
    padding-bottom: 167px;
  }

  .pl-167 {
    padding-left: 167px;
  }

  .pr-167 {
    padding-right: 167px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-168 {
    margin-top: 168px;
  }

  .mb-168 {
    margin-bottom: 168px;
  }

  .ml-168 {
    margin-left: 168px;
  }

  .mr-168 {
    margin-right: 168px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-168 {
    padding-top: 168px;
  }

  .pb-168 {
    padding-bottom: 168px;
  }

  .pl-168 {
    padding-left: 168px;
  }

  .pr-168 {
    padding-right: 168px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-169 {
    margin-top: 169px;
  }

  .mb-169 {
    margin-bottom: 169px;
  }

  .ml-169 {
    margin-left: 169px;
  }

  .mr-169 {
    margin-right: 169px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-169 {
    padding-top: 169px;
  }

  .pb-169 {
    padding-bottom: 169px;
  }

  .pl-169 {
    padding-left: 169px;
  }

  .pr-169 {
    padding-right: 169px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-170 {
    margin-top: 170px;
  }

  .mb-170 {
    margin-bottom: 170px;
  }

  .ml-170 {
    margin-left: 170px;
  }

  .mr-170 {
    margin-right: 170px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-170 {
    padding-top: 170px;
  }

  .pb-170 {
    padding-bottom: 170px;
  }

  .pl-170 {
    padding-left: 170px;
  }

  .pr-170 {
    padding-right: 170px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-171 {
    margin-top: 171px;
  }

  .mb-171 {
    margin-bottom: 171px;
  }

  .ml-171 {
    margin-left: 171px;
  }

  .mr-171 {
    margin-right: 171px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-171 {
    padding-top: 171px;
  }

  .pb-171 {
    padding-bottom: 171px;
  }

  .pl-171 {
    padding-left: 171px;
  }

  .pr-171 {
    padding-right: 171px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-172 {
    margin-top: 172px;
  }

  .mb-172 {
    margin-bottom: 172px;
  }

  .ml-172 {
    margin-left: 172px;
  }

  .mr-172 {
    margin-right: 172px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-172 {
    padding-top: 172px;
  }

  .pb-172 {
    padding-bottom: 172px;
  }

  .pl-172 {
    padding-left: 172px;
  }

  .pr-172 {
    padding-right: 172px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-173 {
    margin-top: 173px;
  }

  .mb-173 {
    margin-bottom: 173px;
  }

  .ml-173 {
    margin-left: 173px;
  }

  .mr-173 {
    margin-right: 173px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-173 {
    padding-top: 173px;
  }

  .pb-173 {
    padding-bottom: 173px;
  }

  .pl-173 {
    padding-left: 173px;
  }

  .pr-173 {
    padding-right: 173px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-174 {
    margin-top: 174px;
  }

  .mb-174 {
    margin-bottom: 174px;
  }

  .ml-174 {
    margin-left: 174px;
  }

  .mr-174 {
    margin-right: 174px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-174 {
    padding-top: 174px;
  }

  .pb-174 {
    padding-bottom: 174px;
  }

  .pl-174 {
    padding-left: 174px;
  }

  .pr-174 {
    padding-right: 174px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-175 {
    margin-top: 175px;
  }

  .mb-175 {
    margin-bottom: 175px;
  }

  .ml-175 {
    margin-left: 175px;
  }

  .mr-175 {
    margin-right: 175px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-175 {
    padding-top: 175px;
  }

  .pb-175 {
    padding-bottom: 175px;
  }

  .pl-175 {
    padding-left: 175px;
  }

  .pr-175 {
    padding-right: 175px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-176 {
    margin-top: 176px;
  }

  .mb-176 {
    margin-bottom: 176px;
  }

  .ml-176 {
    margin-left: 176px;
  }

  .mr-176 {
    margin-right: 176px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-176 {
    padding-top: 176px;
  }

  .pb-176 {
    padding-bottom: 176px;
  }

  .pl-176 {
    padding-left: 176px;
  }

  .pr-176 {
    padding-right: 176px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-177 {
    margin-top: 177px;
  }

  .mb-177 {
    margin-bottom: 177px;
  }

  .ml-177 {
    margin-left: 177px;
  }

  .mr-177 {
    margin-right: 177px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-177 {
    padding-top: 177px;
  }

  .pb-177 {
    padding-bottom: 177px;
  }

  .pl-177 {
    padding-left: 177px;
  }

  .pr-177 {
    padding-right: 177px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-178 {
    margin-top: 178px;
  }

  .mb-178 {
    margin-bottom: 178px;
  }

  .ml-178 {
    margin-left: 178px;
  }

  .mr-178 {
    margin-right: 178px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-178 {
    padding-top: 178px;
  }

  .pb-178 {
    padding-bottom: 178px;
  }

  .pl-178 {
    padding-left: 178px;
  }

  .pr-178 {
    padding-right: 178px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-179 {
    margin-top: 179px;
  }

  .mb-179 {
    margin-bottom: 179px;
  }

  .ml-179 {
    margin-left: 179px;
  }

  .mr-179 {
    margin-right: 179px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-179 {
    padding-top: 179px;
  }

  .pb-179 {
    padding-bottom: 179px;
  }

  .pl-179 {
    padding-left: 179px;
  }

  .pr-179 {
    padding-right: 179px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-180 {
    margin-top: 180px;
  }

  .mb-180 {
    margin-bottom: 180px;
  }

  .ml-180 {
    margin-left: 180px;
  }

  .mr-180 {
    margin-right: 180px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-180 {
    padding-top: 180px;
  }

  .pb-180 {
    padding-bottom: 180px;
  }

  .pl-180 {
    padding-left: 180px;
  }

  .pr-180 {
    padding-right: 180px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-181 {
    margin-top: 181px;
  }

  .mb-181 {
    margin-bottom: 181px;
  }

  .ml-181 {
    margin-left: 181px;
  }

  .mr-181 {
    margin-right: 181px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-181 {
    padding-top: 181px;
  }

  .pb-181 {
    padding-bottom: 181px;
  }

  .pl-181 {
    padding-left: 181px;
  }

  .pr-181 {
    padding-right: 181px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-182 {
    margin-top: 182px;
  }

  .mb-182 {
    margin-bottom: 182px;
  }

  .ml-182 {
    margin-left: 182px;
  }

  .mr-182 {
    margin-right: 182px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-182 {
    padding-top: 182px;
  }

  .pb-182 {
    padding-bottom: 182px;
  }

  .pl-182 {
    padding-left: 182px;
  }

  .pr-182 {
    padding-right: 182px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-183 {
    margin-top: 183px;
  }

  .mb-183 {
    margin-bottom: 183px;
  }

  .ml-183 {
    margin-left: 183px;
  }

  .mr-183 {
    margin-right: 183px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-183 {
    padding-top: 183px;
  }

  .pb-183 {
    padding-bottom: 183px;
  }

  .pl-183 {
    padding-left: 183px;
  }

  .pr-183 {
    padding-right: 183px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-184 {
    margin-top: 184px;
  }

  .mb-184 {
    margin-bottom: 184px;
  }

  .ml-184 {
    margin-left: 184px;
  }

  .mr-184 {
    margin-right: 184px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-184 {
    padding-top: 184px;
  }

  .pb-184 {
    padding-bottom: 184px;
  }

  .pl-184 {
    padding-left: 184px;
  }

  .pr-184 {
    padding-right: 184px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-185 {
    margin-top: 185px;
  }

  .mb-185 {
    margin-bottom: 185px;
  }

  .ml-185 {
    margin-left: 185px;
  }

  .mr-185 {
    margin-right: 185px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-185 {
    padding-top: 185px;
  }

  .pb-185 {
    padding-bottom: 185px;
  }

  .pl-185 {
    padding-left: 185px;
  }

  .pr-185 {
    padding-right: 185px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-186 {
    margin-top: 186px;
  }

  .mb-186 {
    margin-bottom: 186px;
  }

  .ml-186 {
    margin-left: 186px;
  }

  .mr-186 {
    margin-right: 186px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-186 {
    padding-top: 186px;
  }

  .pb-186 {
    padding-bottom: 186px;
  }

  .pl-186 {
    padding-left: 186px;
  }

  .pr-186 {
    padding-right: 186px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-187 {
    margin-top: 187px;
  }

  .mb-187 {
    margin-bottom: 187px;
  }

  .ml-187 {
    margin-left: 187px;
  }

  .mr-187 {
    margin-right: 187px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-187 {
    padding-top: 187px;
  }

  .pb-187 {
    padding-bottom: 187px;
  }

  .pl-187 {
    padding-left: 187px;
  }

  .pr-187 {
    padding-right: 187px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-188 {
    margin-top: 188px;
  }

  .mb-188 {
    margin-bottom: 188px;
  }

  .ml-188 {
    margin-left: 188px;
  }

  .mr-188 {
    margin-right: 188px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-188 {
    padding-top: 188px;
  }

  .pb-188 {
    padding-bottom: 188px;
  }

  .pl-188 {
    padding-left: 188px;
  }

  .pr-188 {
    padding-right: 188px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-189 {
    margin-top: 189px;
  }

  .mb-189 {
    margin-bottom: 189px;
  }

  .ml-189 {
    margin-left: 189px;
  }

  .mr-189 {
    margin-right: 189px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-189 {
    padding-top: 189px;
  }

  .pb-189 {
    padding-bottom: 189px;
  }

  .pl-189 {
    padding-left: 189px;
  }

  .pr-189 {
    padding-right: 189px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-190 {
    margin-top: 190px;
  }

  .mb-190 {
    margin-bottom: 190px;
  }

  .ml-190 {
    margin-left: 190px;
  }

  .mr-190 {
    margin-right: 190px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-190 {
    padding-top: 190px;
  }

  .pb-190 {
    padding-bottom: 190px;
  }

  .pl-190 {
    padding-left: 190px;
  }

  .pr-190 {
    padding-right: 190px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-191 {
    margin-top: 191px;
  }

  .mb-191 {
    margin-bottom: 191px;
  }

  .ml-191 {
    margin-left: 191px;
  }

  .mr-191 {
    margin-right: 191px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-191 {
    padding-top: 191px;
  }

  .pb-191 {
    padding-bottom: 191px;
  }

  .pl-191 {
    padding-left: 191px;
  }

  .pr-191 {
    padding-right: 191px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-192 {
    margin-top: 192px;
  }

  .mb-192 {
    margin-bottom: 192px;
  }

  .ml-192 {
    margin-left: 192px;
  }

  .mr-192 {
    margin-right: 192px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-192 {
    padding-top: 192px;
  }

  .pb-192 {
    padding-bottom: 192px;
  }

  .pl-192 {
    padding-left: 192px;
  }

  .pr-192 {
    padding-right: 192px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-193 {
    margin-top: 193px;
  }

  .mb-193 {
    margin-bottom: 193px;
  }

  .ml-193 {
    margin-left: 193px;
  }

  .mr-193 {
    margin-right: 193px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-193 {
    padding-top: 193px;
  }

  .pb-193 {
    padding-bottom: 193px;
  }

  .pl-193 {
    padding-left: 193px;
  }

  .pr-193 {
    padding-right: 193px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-194 {
    margin-top: 194px;
  }

  .mb-194 {
    margin-bottom: 194px;
  }

  .ml-194 {
    margin-left: 194px;
  }

  .mr-194 {
    margin-right: 194px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-194 {
    padding-top: 194px;
  }

  .pb-194 {
    padding-bottom: 194px;
  }

  .pl-194 {
    padding-left: 194px;
  }

  .pr-194 {
    padding-right: 194px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-195 {
    margin-top: 195px;
  }

  .mb-195 {
    margin-bottom: 195px;
  }

  .ml-195 {
    margin-left: 195px;
  }

  .mr-195 {
    margin-right: 195px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-195 {
    padding-top: 195px;
  }

  .pb-195 {
    padding-bottom: 195px;
  }

  .pl-195 {
    padding-left: 195px;
  }

  .pr-195 {
    padding-right: 195px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-196 {
    margin-top: 196px;
  }

  .mb-196 {
    margin-bottom: 196px;
  }

  .ml-196 {
    margin-left: 196px;
  }

  .mr-196 {
    margin-right: 196px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-196 {
    padding-top: 196px;
  }

  .pb-196 {
    padding-bottom: 196px;
  }

  .pl-196 {
    padding-left: 196px;
  }

  .pr-196 {
    padding-right: 196px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-197 {
    margin-top: 197px;
  }

  .mb-197 {
    margin-bottom: 197px;
  }

  .ml-197 {
    margin-left: 197px;
  }

  .mr-197 {
    margin-right: 197px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-197 {
    padding-top: 197px;
  }

  .pb-197 {
    padding-bottom: 197px;
  }

  .pl-197 {
    padding-left: 197px;
  }

  .pr-197 {
    padding-right: 197px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-198 {
    margin-top: 198px;
  }

  .mb-198 {
    margin-bottom: 198px;
  }

  .ml-198 {
    margin-left: 198px;
  }

  .mr-198 {
    margin-right: 198px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-198 {
    padding-top: 198px;
  }

  .pb-198 {
    padding-bottom: 198px;
  }

  .pl-198 {
    padding-left: 198px;
  }

  .pr-198 {
    padding-right: 198px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-199 {
    margin-top: 199px;
  }

  .mb-199 {
    margin-bottom: 199px;
  }

  .ml-199 {
    margin-left: 199px;
  }

  .mr-199 {
    margin-right: 199px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-199 {
    padding-top: 199px;
  }

  .pb-199 {
    padding-bottom: 199px;
  }

  .pl-199 {
    padding-left: 199px;
  }

  .pr-199 {
    padding-right: 199px;
  }

  /*-- Margin To-Bottom-Left-Right --*/
  .mt-200 {
    margin-top: 200px;
  }

  .mb-200 {
    margin-bottom: 200px;
  }

  .ml-200 {
    margin-left: 200px;
  }

  .mr-200 {
    margin-right: 200px;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-200 {
    padding-top: 200px;
  }

  .pb-200 {
    padding-bottom: 200px;
  }

  .pl-200 {
    padding-left: 200px;
  }

  .pr-200 {
    padding-right: 200px;
  }

  /*-- Margin Padding  0 --*/
  /*-- Margin To-Bottom-Left-Right --*/
  .mt-0 {
    margin-top: 0px !important;
  }

  .mb-0 {
    margin-bottom: 0px !important;
  }

  .ml-0 {
    margin-left: 0px !important;
  }

  .mr-0 {
    margin-right: 0px !important;
  }

  /*-- Padding To-Bottom-Left-Right --*/
  .pt-0 {
    padding-top: 0px !important;
  }

  .pb-0 {
    padding-bottom: 0px !important;
  }

  .pl-0 {
    padding-left: 0px !important;
  }

  .pr-0 {
    padding-right: 0px !important;
  }

  /*-- Height-Weight --*/
  .height-1 {
    height: 1px !important;
  }

  .wight-1 {
    width: 1px;
  }

  .height-2 {
    height: 2px !important;
  }

  .wight-2 {
    width: 2px;
  }

  .height-3 {
    height: 3px !important;
  }

  .wight-3 {
    width: 3px;
  }

  .height-4 {
    height: 4px !important;
  }

  .wight-4 {
    width: 4px;
  }

  .height-5 {
    height: 5px !important;
  }

  .wight-5 {
    width: 5px;
  }

  .height-6 {
    height: 6px !important;
  }

  .wight-6 {
    width: 6px;
  }

  .height-7 {
    height: 7px !important;
  }

  .wight-7 {
    width: 7px;
  }

  .height-8 {
    height: 8px !important;
  }

  .wight-8 {
    width: 8px;
  }

  .height-9 {
    height: 9px !important;
  }

  .wight-9 {
    width: 9px;
  }

  .height-10 {
    height: 10px !important;
  }

  .wight-10 {
    width: 10px;
  }

  .height-11 {
    height: 11px !important;
  }

  .wight-11 {
    width: 11px;
  }

  .height-12 {
    height: 12px !important;
  }

  .wight-12 {
    width: 12px;
  }

  .height-13 {
    height: 13px !important;
  }

  .wight-13 {
    width: 13px;
  }

  .height-14 {
    height: 14px !important;
  }

  .wight-14 {
    width: 14px;
  }

  .height-15 {
    height: 15px !important;
  }

  .wight-15 {
    width: 15px;
  }

  .height-16 {
    height: 16px !important;
  }

  .wight-16 {
    width: 16px;
  }

  .height-17 {
    height: 17px !important;
  }

  .wight-17 {
    width: 17px;
  }

  .height-18 {
    height: 18px !important;
  }

  .wight-18 {
    width: 18px;
  }

  .height-19 {
    height: 19px !important;
  }

  .wight-19 {
    width: 19px;
  }

  .height-20 {
    height: 20px !important;
  }

  .wight-20 {
    width: 20px;
  }

  .height-21 {
    height: 21px !important;
  }

  .wight-21 {
    width: 21px;
  }

  .height-22 {
    height: 22px !important;
  }

  .wight-22 {
    width: 22px;
  }

  .height-23 {
    height: 23px !important;
  }

  .wight-23 {
    width: 23px;
  }

  .height-24 {
    height: 24px !important;
  }

  .wight-24 {
    width: 24px;
  }

  .height-25 {
    height: 25px !important;
  }

  .wight-25 {
    width: 25px;
  }

  .height-26 {
    height: 26px !important;
  }

  .wight-26 {
    width: 26px;
  }

  .height-27 {
    height: 27px !important;
  }

  .wight-27 {
    width: 27px;
  }

  .height-28 {
    height: 28px !important;
  }

  .wight-28 {
    width: 28px;
  }

  .height-29 {
    height: 29px !important;
  }

  .wight-29 {
    width: 29px;
  }

  .height-30 {
    height: 30px !important;
  }

  .wight-30 {
    width: 30px;
  }

  .height-31 {
    height: 31px !important;
  }

  .wight-31 {
    width: 31px;
  }

  .height-32 {
    height: 32px !important;
  }

  .wight-32 {
    width: 32px;
  }

  .height-33 {
    height: 33px !important;
  }

  .wight-33 {
    width: 33px;
  }

  .height-34 {
    height: 34px !important;
  }

  .wight-34 {
    width: 34px;
  }

  .height-35 {
    height: 35px !important;
  }

  .wight-35 {
    width: 35px;
  }

  .height-36 {
    height: 36px !important;
  }

  .wight-36 {
    width: 36px;
  }

  .height-37 {
    height: 37px !important;
  }

  .wight-37 {
    width: 37px;
  }

  .height-38 {
    height: 38px !important;
  }

  .wight-38 {
    width: 38px;
  }

  .height-39 {
    height: 39px !important;
  }

  .wight-39 {
    width: 39px;
  }

  .height-40 {
    height: 40px !important;
  }

  .wight-40 {
    width: 40px;
  }

  .height-41 {
    height: 41px !important;
  }

  .wight-41 {
    width: 41px;
  }

  .height-42 {
    height: 42px !important;
  }

  .wight-42 {
    width: 42px;
  }

  .height-43 {
    height: 43px !important;
  }

  .wight-43 {
    width: 43px;
  }

  .height-44 {
    height: 44px !important;
  }

  .wight-44 {
    width: 44px;
  }

  .height-45 {
    height: 45px !important;
  }

  .wight-45 {
    width: 45px;
  }

  .height-46 {
    height: 46px !important;
  }

  .wight-46 {
    width: 46px;
  }

  .height-47 {
    height: 47px !important;
  }

  .wight-47 {
    width: 47px;
  }

  .height-48 {
    height: 48px !important;
  }

  .wight-48 {
    width: 48px;
  }

  .height-49 {
    height: 49px !important;
  }

  .wight-49 {
    width: 49px;
  }

  .height-50 {
    height: 50px !important;
  }

  .wight-50 {
    width: 50px;
  }

  .height-51 {
    height: 51px !important;
  }

  .wight-51 {
    width: 51px;
  }

  .height-52 {
    height: 52px !important;
  }

  .wight-52 {
    width: 52px;
  }

  .height-53 {
    height: 53px !important;
  }

  .wight-53 {
    width: 53px;
  }

  .height-54 {
    height: 54px !important;
  }

  .wight-54 {
    width: 54px;
  }

  .height-55 {
    height: 55px !important;
  }

  .wight-55 {
    width: 55px;
  }

  .height-56 {
    height: 56px !important;
  }

  .wight-56 {
    width: 56px;
  }

  .height-57 {
    height: 57px !important;
  }

  .wight-57 {
    width: 57px;
  }

  .height-58 {
    height: 58px !important;
  }

  .wight-58 {
    width: 58px;
  }

  .height-59 {
    height: 59px !important;
  }

  .wight-59 {
    width: 59px;
  }

  .height-60 {
    height: 60px !important;
  }

  .wight-60 {
    width: 60px;
  }

  .height-61 {
    height: 61px !important;
  }

  .wight-61 {
    width: 61px;
  }

  .height-62 {
    height: 62px !important;
  }

  .wight-62 {
    width: 62px;
  }

  .height-63 {
    height: 63px !important;
  }

  .wight-63 {
    width: 63px;
  }

  .height-64 {
    height: 64px !important;
  }

  .wight-64 {
    width: 64px;
  }

  .height-65 {
    height: 65px !important;
  }

  .wight-65 {
    width: 65px;
  }

  .height-66 {
    height: 66px !important;
  }

  .wight-66 {
    width: 66px;
  }

  .height-67 {
    height: 67px !important;
  }

  .wight-67 {
    width: 67px;
  }

  .height-68 {
    height: 68px !important;
  }

  .wight-68 {
    width: 68px;
  }

  .height-69 {
    height: 69px !important;
  }

  .wight-69 {
    width: 69px;
  }

  .height-70 {
    height: 70px !important;
  }

  .wight-70 {
    width: 70px;
  }

  .height-71 {
    height: 71px !important;
  }

  .wight-71 {
    width: 71px;
  }

  .height-72 {
    height: 72px !important;
  }

  .wight-72 {
    width: 72px;
  }

  .height-73 {
    height: 73px !important;
  }

  .wight-73 {
    width: 73px;
  }

  .height-74 {
    height: 74px !important;
  }

  .wight-74 {
    width: 74px;
  }

  .height-75 {
    height: 75px !important;
  }

  .wight-75 {
    width: 75px;
  }

  .height-76 {
    height: 76px !important;
  }

  .wight-76 {
    width: 76px;
  }

  .height-77 {
    height: 77px !important;
  }

  .wight-77 {
    width: 77px;
  }

  .height-78 {
    height: 78px !important;
  }

  .wight-78 {
    width: 78px;
  }

  .height-79 {
    height: 79px !important;
  }

  .wight-79 {
    width: 79px;
  }

  .height-80 {
    height: 80px !important;
  }

  .wight-80 {
    width: 80px;
  }

  .height-81 {
    height: 81px !important;
  }

  .wight-81 {
    width: 81px;
  }

  .height-82 {
    height: 82px !important;
  }

  .wight-82 {
    width: 82px;
  }

  .height-83 {
    height: 83px !important;
  }

  .wight-83 {
    width: 83px;
  }

  .height-84 {
    height: 84px !important;
  }

  .wight-84 {
    width: 84px;
  }

  .height-85 {
    height: 85px !important;
  }

  .wight-85 {
    width: 85px;
  }

  .height-86 {
    height: 86px !important;
  }

  .wight-86 {
    width: 86px;
  }

  .height-87 {
    height: 87px !important;
  }

  .wight-87 {
    width: 87px;
  }

  .height-88 {
    height: 88px !important;
  }

  .wight-88 {
    width: 88px;
  }

  .height-89 {
    height: 89px !important;
  }

  .wight-89 {
    width: 89px;
  }

  .height-90 {
    height: 90px !important;
  }

  .wight-90 {
    width: 90px;
  }

  .height-91 {
    height: 91px !important;
  }

  .wight-91 {
    width: 91px;
  }

  .height-92 {
    height: 92px !important;
  }

  .wight-92 {
    width: 92px;
  }

  .height-93 {
    height: 93px !important;
  }

  .wight-93 {
    width: 93px;
  }

  .height-94 {
    height: 94px !important;
  }

  .wight-94 {
    width: 94px;
  }

  .height-95 {
    height: 95px !important;
  }

  .wight-95 {
    width: 95px;
  }

  .height-96 {
    height: 96px !important;
  }

  .wight-96 {
    width: 96px;
  }

  .height-97 {
    height: 97px !important;
  }

  .wight-97 {
    width: 97px;
  }

  .height-98 {
    height: 98px !important;
  }

  .wight-98 {
    width: 98px;
  }

  .height-99 {
    height: 99px !important;
  }

  .wight-99 {
    width: 99px;
  }

  .height-100 {
    height: 100px !important;
  }

  .wight-100 {
    width: 100px;
  }

  .height-101 {
    height: 101px !important;
  }

  .wight-101 {
    width: 101px;
  }

  .height-102 {
    height: 102px !important;
  }

  .wight-102 {
    width: 102px;
  }

  .height-103 {
    height: 103px !important;
  }

  .wight-103 {
    width: 103px;
  }

  .height-104 {
    height: 104px !important;
  }

  .wight-104 {
    width: 104px;
  }

  .height-105 {
    height: 105px !important;
  }

  .wight-105 {
    width: 105px;
  }

  .height-106 {
    height: 106px !important;
  }

  .wight-106 {
    width: 106px;
  }

  .height-107 {
    height: 107px !important;
  }

  .wight-107 {
    width: 107px;
  }

  .height-108 {
    height: 108px !important;
  }

  .wight-108 {
    width: 108px;
  }

  .height-109 {
    height: 109px !important;
  }

  .wight-109 {
    width: 109px;
  }

  .height-110 {
    height: 110px !important;
  }

  .wight-110 {
    width: 110px;
  }

  .height-111 {
    height: 111px !important;
  }

  .wight-111 {
    width: 111px;
  }

  .height-112 {
    height: 112px !important;
  }

  .wight-112 {
    width: 112px;
  }

  .height-113 {
    height: 113px !important;
  }

  .wight-113 {
    width: 113px;
  }

  .height-114 {
    height: 114px !important;
  }

  .wight-114 {
    width: 114px;
  }

  .height-115 {
    height: 115px !important;
  }

  .wight-115 {
    width: 115px;
  }

  .height-116 {
    height: 116px !important;
  }

  .wight-116 {
    width: 116px;
  }

  .height-117 {
    height: 117px !important;
  }

  .wight-117 {
    width: 117px;
  }

  .height-118 {
    height: 118px !important;
  }

  .wight-118 {
    width: 118px;
  }

  .height-119 {
    height: 119px !important;
  }

  .wight-119 {
    width: 119px;
  }

  .height-120 {
    height: 120px !important;
  }

  .wight-120 {
    width: 120px;
  }

  .height-121 {
    height: 121px !important;
  }

  .wight-121 {
    width: 121px;
  }

  .height-122 {
    height: 122px !important;
  }

  .wight-122 {
    width: 122px;
  }

  .height-123 {
    height: 123px !important;
  }

  .wight-123 {
    width: 123px;
  }

  .height-124 {
    height: 124px !important;
  }

  .wight-124 {
    width: 124px;
  }

  .height-125 {
    height: 125px !important;
  }

  .wight-125 {
    width: 125px;
  }

  .height-126 {
    height: 126px !important;
  }

  .wight-126 {
    width: 126px;
  }

  .height-127 {
    height: 127px !important;
  }

  .wight-127 {
    width: 127px;
  }

  .height-128 {
    height: 128px !important;
  }

  .wight-128 {
    width: 128px;
  }

  .height-129 {
    height: 129px !important;
  }

  .wight-129 {
    width: 129px;
  }

  .height-130 {
    height: 130px !important;
  }

  .wight-130 {
    width: 130px;
  }

  .height-131 {
    height: 131px !important;
  }

  .wight-131 {
    width: 131px;
  }

  .height-132 {
    height: 132px !important;
  }

  .wight-132 {
    width: 132px;
  }

  .height-133 {
    height: 133px !important;
  }

  .wight-133 {
    width: 133px;
  }

  .height-134 {
    height: 134px !important;
  }

  .wight-134 {
    width: 134px;
  }

  .height-135 {
    height: 135px !important;
  }

  .wight-135 {
    width: 135px;
  }

  .height-136 {
    height: 136px !important;
  }

  .wight-136 {
    width: 136px;
  }

  .height-137 {
    height: 137px !important;
  }

  .wight-137 {
    width: 137px;
  }

  .height-138 {
    height: 138px !important;
  }

  .wight-138 {
    width: 138px;
  }

  .height-139 {
    height: 139px !important;
  }

  .wight-139 {
    width: 139px;
  }

  .height-140 {
    height: 140px !important;
  }

  .wight-140 {
    width: 140px;
  }

  .height-141 {
    height: 141px !important;
  }

  .wight-141 {
    width: 141px;
  }

  .height-142 {
    height: 142px !important;
  }

  .wight-142 {
    width: 142px;
  }

  .height-143 {
    height: 143px !important;
  }

  .wight-143 {
    width: 143px;
  }

  .height-144 {
    height: 144px !important;
  }

  .wight-144 {
    width: 144px;
  }

  .height-145 {
    height: 145px !important;
  }

  .wight-145 {
    width: 145px;
  }

  .height-146 {
    height: 146px !important;
  }

  .wight-146 {
    width: 146px;
  }

  .height-147 {
    height: 147px !important;
  }

  .wight-147 {
    width: 147px;
  }

  .height-148 {
    height: 148px !important;
  }

  .wight-148 {
    width: 148px;
  }

  .height-149 {
    height: 149px !important;
  }

  .wight-149 {
    width: 149px;
  }

  .height-150 {
    height: 150px !important;
  }

  .wight-150 {
    width: 150px;
  }

  .height-151 {
    height: 151px !important;
  }

  .wight-151 {
    width: 151px;
  }

  .height-152 {
    height: 152px !important;
  }

  .wight-152 {
    width: 152px;
  }

  .height-153 {
    height: 153px !important;
  }

  .wight-153 {
    width: 153px;
  }

  .height-154 {
    height: 154px !important;
  }

  .wight-154 {
    width: 154px;
  }

  .height-155 {
    height: 155px !important;
  }

  .wight-155 {
    width: 155px;
  }

  .height-156 {
    height: 156px !important;
  }

  .wight-156 {
    width: 156px;
  }

  .height-157 {
    height: 157px !important;
  }

  .wight-157 {
    width: 157px;
  }

  .height-158 {
    height: 158px !important;
  }

  .wight-158 {
    width: 158px;
  }

  .height-159 {
    height: 159px !important;
  }

  .wight-159 {
    width: 159px;
  }

  .height-160 {
    height: 160px !important;
  }

  .wight-160 {
    width: 160px;
  }

  .height-161 {
    height: 161px !important;
  }

  .wight-161 {
    width: 161px;
  }

  .height-162 {
    height: 162px !important;
  }

  .wight-162 {
    width: 162px;
  }

  .height-163 {
    height: 163px !important;
  }

  .wight-163 {
    width: 163px;
  }

  .height-164 {
    height: 164px !important;
  }

  .wight-164 {
    width: 164px;
  }

  .height-165 {
    height: 165px !important;
  }

  .wight-165 {
    width: 165px;
  }

  .height-166 {
    height: 166px !important;
  }

  .wight-166 {
    width: 166px;
  }

  .height-167 {
    height: 167px !important;
  }

  .wight-167 {
    width: 167px;
  }

  .height-168 {
    height: 168px !important;
  }

  .wight-168 {
    width: 168px;
  }

  .height-169 {
    height: 169px !important;
  }

  .wight-169 {
    width: 169px;
  }

  .height-170 {
    height: 170px !important;
  }

  .wight-170 {
    width: 170px;
  }

  .height-171 {
    height: 171px !important;
  }

  .wight-171 {
    width: 171px;
  }

  .height-172 {
    height: 172px !important;
  }

  .wight-172 {
    width: 172px;
  }

  .height-173 {
    height: 173px !important;
  }

  .wight-173 {
    width: 173px;
  }

  .height-174 {
    height: 174px !important;
  }

  .wight-174 {
    width: 174px;
  }

  .height-175 {
    height: 175px !important;
  }

  .wight-175 {
    width: 175px;
  }

  .height-176 {
    height: 176px !important;
  }

  .wight-176 {
    width: 176px;
  }

  .height-177 {
    height: 177px !important;
  }

  .wight-177 {
    width: 177px;
  }

  .height-178 {
    height: 178px !important;
  }

  .wight-178 {
    width: 178px;
  }

  .height-179 {
    height: 179px !important;
  }

  .wight-179 {
    width: 179px;
  }

  .height-180 {
    height: 180px !important;
  }

  .wight-180 {
    width: 180px;
  }

  .height-181 {
    height: 181px !important;
  }

  .wight-181 {
    width: 181px;
  }

  .height-182 {
    height: 182px !important;
  }

  .wight-182 {
    width: 182px;
  }

  .height-183 {
    height: 183px !important;
  }

  .wight-183 {
    width: 183px;
  }

  .height-184 {
    height: 184px !important;
  }

  .wight-184 {
    width: 184px;
  }

  .height-185 {
    height: 185px !important;
  }

  .wight-185 {
    width: 185px;
  }

  .height-186 {
    height: 186px !important;
  }

  .wight-186 {
    width: 186px;
  }

  .height-187 {
    height: 187px !important;
  }

  .wight-187 {
    width: 187px;
  }

  .height-188 {
    height: 188px !important;
  }

  .wight-188 {
    width: 188px;
  }

  .height-189 {
    height: 189px !important;
  }

  .wight-189 {
    width: 189px;
  }

  .height-190 {
    height: 190px !important;
  }

  .wight-190 {
    width: 190px;
  }

  .height-191 {
    height: 191px !important;
  }

  .wight-191 {
    width: 191px;
  }

  .height-192 {
    height: 192px !important;
  }

  .wight-192 {
    width: 192px;
  }

  .height-193 {
    height: 193px !important;
  }

  .wight-193 {
    width: 193px;
  }

  .height-194 {
    height: 194px !important;
  }

  .wight-194 {
    width: 194px;
  }

  .height-195 {
    height: 195px !important;
  }

  .wight-195 {
    width: 195px;
  }

  .height-196 {
    height: 196px !important;
  }

  .wight-196 {
    width: 196px;
  }

  .height-197 {
    height: 197px !important;
  }

  .wight-197 {
    width: 197px;
  }

  .height-198 {
    height: 198px !important;
  }

  .wight-198 {
    width: 198px;
  }

  .height-199 {
    height: 199px !important;
  }

  .wight-199 {
    width: 199px;
  }

  .height-200 {
    height: 200px !important;
  }

  .wight-200 {
    width: 200px;
  }

  .height-201 {
    height: 201px !important;
  }

  .wight-201 {
    width: 201px;
  }

  .height-202 {
    height: 202px !important;
  }

  .wight-202 {
    width: 202px;
  }

  .height-203 {
    height: 203px !important;
  }

  .wight-203 {
    width: 203px;
  }

  .height-204 {
    height: 204px !important;
  }

  .wight-204 {
    width: 204px;
  }

  .height-205 {
    height: 205px !important;
  }

  .wight-205 {
    width: 205px;
  }

  .height-206 {
    height: 206px !important;
  }

  .wight-206 {
    width: 206px;
  }

  .height-207 {
    height: 207px !important;
  }

  .wight-207 {
    width: 207px;
  }

  .height-208 {
    height: 208px !important;
  }

  .wight-208 {
    width: 208px;
  }

  .height-209 {
    height: 209px !important;
  }

  .wight-209 {
    width: 209px;
  }

  .height-210 {
    height: 210px !important;
  }

  .wight-210 {
    width: 210px;
  }

  .height-211 {
    height: 211px !important;
  }

  .wight-211 {
    width: 211px;
  }

  .height-212 {
    height: 212px !important;
  }

  .wight-212 {
    width: 212px;
  }

  .height-213 {
    height: 213px !important;
  }

  .wight-213 {
    width: 213px;
  }

  .height-214 {
    height: 214px !important;
  }

  .wight-214 {
    width: 214px;
  }

  .height-215 {
    height: 215px !important;
  }

  .wight-215 {
    width: 215px;
  }

  .height-216 {
    height: 216px !important;
  }

  .wight-216 {
    width: 216px;
  }

  .height-217 {
    height: 217px !important;
  }

  .wight-217 {
    width: 217px;
  }

  .height-218 {
    height: 218px !important;
  }

  .wight-218 {
    width: 218px;
  }

  .height-219 {
    height: 219px !important;
  }

  .wight-219 {
    width: 219px;
  }

  .height-220 {
    height: 220px !important;
  }

  .wight-220 {
    width: 220px;
  }

  .height-221 {
    height: 221px !important;
  }

  .wight-221 {
    width: 221px;
  }

  .height-222 {
    height: 222px !important;
  }

  .wight-222 {
    width: 222px;
  }

  .height-223 {
    height: 223px !important;
  }

  .wight-223 {
    width: 223px;
  }

  .height-224 {
    height: 224px !important;
  }

  .wight-224 {
    width: 224px;
  }

  .height-225 {
    height: 225px !important;
  }

  .wight-225 {
    width: 225px;
  }

  .height-226 {
    height: 226px !important;
  }

  .wight-226 {
    width: 226px;
  }

  .height-227 {
    height: 227px !important;
  }

  .wight-227 {
    width: 227px;
  }

  .height-228 {
    height: 228px !important;
  }

  .wight-228 {
    width: 228px;
  }

  .height-229 {
    height: 229px !important;
  }

  .wight-229 {
    width: 229px;
  }

  .height-230 {
    height: 230px !important;
  }

  .wight-230 {
    width: 230px;
  }

  .height-231 {
    height: 231px !important;
  }

  .wight-231 {
    width: 231px;
  }

  .height-232 {
    height: 232px !important;
  }

  .wight-232 {
    width: 232px;
  }

  .height-233 {
    height: 233px !important;
  }

  .wight-233 {
    width: 233px;
  }

  .height-234 {
    height: 234px !important;
  }

  .wight-234 {
    width: 234px;
  }

  .height-235 {
    height: 235px !important;
  }

  .wight-235 {
    width: 235px;
  }

  .height-236 {
    height: 236px !important;
  }

  .wight-236 {
    width: 236px;
  }

  .height-237 {
    height: 237px !important;
  }

  .wight-237 {
    width: 237px;
  }

  .height-238 {
    height: 238px !important;
  }

  .wight-238 {
    width: 238px;
  }

  .height-239 {
    height: 239px !important;
  }

  .wight-239 {
    width: 239px;
  }

  .height-240 {
    height: 240px !important;
  }

  .wight-240 {
    width: 240px;
  }

  .height-241 {
    height: 241px !important;
  }

  .wight-241 {
    width: 241px;
  }

  .height-242 {
    height: 242px !important;
  }

  .wight-242 {
    width: 242px;
  }

  .height-243 {
    height: 243px !important;
  }

  .wight-243 {
    width: 243px;
  }

  .height-244 {
    height: 244px !important;
  }

  .wight-244 {
    width: 244px;
  }

  .height-245 {
    height: 245px !important;
  }

  .wight-245 {
    width: 245px;
  }

  .height-246 {
    height: 246px !important;
  }

  .wight-246 {
    width: 246px;
  }

  .height-247 {
    height: 247px !important;
  }

  .wight-247 {
    width: 247px;
  }

  .height-248 {
    height: 248px !important;
  }

  .wight-248 {
    width: 248px;
  }

  .height-249 {
    height: 249px !important;
  }

  .wight-249 {
    width: 249px;
  }

  .height-250 {
    height: 250px !important;
  }

  .wight-250 {
    width: 250px;
  }

  .height-251 {
    height: 251px !important;
  }

  .wight-251 {
    width: 251px;
  }

  .height-252 {
    height: 252px !important;
  }

  .wight-252 {
    width: 252px;
  }

  .height-253 {
    height: 253px !important;
  }

  .wight-253 {
    width: 253px;
  }

  .height-254 {
    height: 254px !important;
  }

  .wight-254 {
    width: 254px;
  }

  .height-255 {
    height: 255px !important;
  }

  .wight-255 {
    width: 255px;
  }

  .height-256 {
    height: 256px !important;
  }

  .wight-256 {
    width: 256px;
  }

  .height-257 {
    height: 257px !important;
  }

  .wight-257 {
    width: 257px;
  }

  .height-258 {
    height: 258px !important;
  }

  .wight-258 {
    width: 258px;
  }

  .height-259 {
    height: 259px !important;
  }

  .wight-259 {
    width: 259px;
  }

  .height-260 {
    height: 260px !important;
  }

  .wight-260 {
    width: 260px;
  }

  .height-261 {
    height: 261px !important;
  }

  .wight-261 {
    width: 261px;
  }

  .height-262 {
    height: 262px !important;
  }

  .wight-262 {
    width: 262px;
  }

  .height-263 {
    height: 263px !important;
  }

  .wight-263 {
    width: 263px;
  }

  .height-264 {
    height: 264px !important;
  }

  .wight-264 {
    width: 264px;
  }

  .height-265 {
    height: 265px !important;
  }

  .wight-265 {
    width: 265px;
  }

  .height-266 {
    height: 266px !important;
  }

  .wight-266 {
    width: 266px;
  }

  .height-267 {
    height: 267px !important;
  }

  .wight-267 {
    width: 267px;
  }

  .height-268 {
    height: 268px !important;
  }

  .wight-268 {
    width: 268px;
  }

  .height-269 {
    height: 269px !important;
  }

  .wight-269 {
    width: 269px;
  }

  .height-270 {
    height: 270px !important;
  }

  .wight-270 {
    width: 270px;
  }

  .height-271 {
    height: 271px !important;
  }

  .wight-271 {
    width: 271px;
  }

  .height-272 {
    height: 272px !important;
  }

  .wight-272 {
    width: 272px;
  }

  .height-273 {
    height: 273px !important;
  }

  .wight-273 {
    width: 273px;
  }

  .height-274 {
    height: 274px !important;
  }

  .wight-274 {
    width: 274px;
  }

  .height-275 {
    height: 275px !important;
  }

  .wight-275 {
    width: 275px;
  }

  .height-276 {
    height: 276px !important;
  }

  .wight-276 {
    width: 276px;
  }

  .height-277 {
    height: 277px !important;
  }

  .wight-277 {
    width: 277px;
  }

  .height-278 {
    height: 278px !important;
  }

  .wight-278 {
    width: 278px;
  }

  .height-279 {
    height: 279px !important;
  }

  .wight-279 {
    width: 279px;
  }

  .height-280 {
    height: 280px !important;
  }

  .wight-280 {
    width: 280px;
  }

  .height-281 {
    height: 281px !important;
  }

  .wight-281 {
    width: 281px;
  }

  .height-282 {
    height: 282px !important;
  }

  .wight-282 {
    width: 282px;
  }

  .height-283 {
    height: 283px !important;
  }

  .wight-283 {
    width: 283px;
  }

  .height-284 {
    height: 284px !important;
  }

  .wight-284 {
    width: 284px;
  }

  .height-285 {
    height: 285px !important;
  }

  .wight-285 {
    width: 285px;
  }

  .height-286 {
    height: 286px !important;
  }

  .wight-286 {
    width: 286px;
  }

  .height-287 {
    height: 287px !important;
  }

  .wight-287 {
    width: 287px;
  }

  .height-288 {
    height: 288px !important;
  }

  .wight-288 {
    width: 288px;
  }

  .height-289 {
    height: 289px !important;
  }

  .wight-289 {
    width: 289px;
  }

  .height-290 {
    height: 290px !important;
  }

  .wight-290 {
    width: 290px;
  }

  .height-291 {
    height: 291px !important;
  }

  .wight-291 {
    width: 291px;
  }

  .height-292 {
    height: 292px !important;
  }

  .wight-292 {
    width: 292px;
  }

  .height-293 {
    height: 293px !important;
  }

  .wight-293 {
    width: 293px;
  }

  .height-294 {
    height: 294px !important;
  }

  .wight-294 {
    width: 294px;
  }

  .height-295 {
    height: 295px !important;
  }

  .wight-295 {
    width: 295px;
  }

  .height-296 {
    height: 296px !important;
  }

  .wight-296 {
    width: 296px;
  }

  .height-297 {
    height: 297px !important;
  }

  .wight-297 {
    width: 297px;
  }

  .height-298 {
    height: 298px !important;
  }

  .wight-298 {
    width: 298px;
  }

  .height-299 {
    height: 299px !important;
  }

  .wight-299 {
    width: 299px;
  }

  .height-300 {
    height: 300px !important;
  }

  .wight-300 {
    width: 300px;
  }

  .height-301 {
    height: 301px !important;
  }

  .wight-301 {
    width: 301px;
  }

  .height-302 {
    height: 302px !important;
  }

  .wight-302 {
    width: 302px;
  }

  .height-303 {
    height: 303px !important;
  }

  .wight-303 {
    width: 303px;
  }

  .height-304 {
    height: 304px !important;
  }

  .wight-304 {
    width: 304px;
  }

  .height-305 {
    height: 305px !important;
  }

  .wight-305 {
    width: 305px;
  }

  .height-306 {
    height: 306px !important;
  }

  .wight-306 {
    width: 306px;
  }

  .height-307 {
    height: 307px !important;
  }

  .wight-307 {
    width: 307px;
  }

  .height-308 {
    height: 308px !important;
  }

  .wight-308 {
    width: 308px;
  }

  .height-309 {
    height: 309px !important;
  }

  .wight-309 {
    width: 309px;
  }

  .height-310 {
    height: 310px !important;
  }

  .wight-310 {
    width: 310px;
  }

  .height-311 {
    height: 311px !important;
  }

  .wight-311 {
    width: 311px;
  }

  .height-312 {
    height: 312px !important;
  }

  .wight-312 {
    width: 312px;
  }

  .height-313 {
    height: 313px !important;
  }

  .wight-313 {
    width: 313px;
  }

  .height-314 {
    height: 314px !important;
  }

  .wight-314 {
    width: 314px;
  }

  .height-315 {
    height: 315px !important;
  }

  .wight-315 {
    width: 315px;
  }

  .height-316 {
    height: 316px !important;
  }

  .wight-316 {
    width: 316px;
  }

  .height-317 {
    height: 317px !important;
  }

  .wight-317 {
    width: 317px;
  }

  .height-318 {
    height: 318px !important;
  }

  .wight-318 {
    width: 318px;
  }

  .height-319 {
    height: 319px !important;
  }

  .wight-319 {
    width: 319px;
  }

  .height-320 {
    height: 320px !important;
  }

  .wight-320 {
    width: 320px;
  }

  .height-321 {
    height: 321px !important;
  }

  .wight-321 {
    width: 321px;
  }

  .height-322 {
    height: 322px !important;
  }

  .wight-322 {
    width: 322px;
  }

  .height-323 {
    height: 323px !important;
  }

  .wight-323 {
    width: 323px;
  }

  .height-324 {
    height: 324px !important;
  }

  .wight-324 {
    width: 324px;
  }

  .height-325 {
    height: 325px !important;
  }

  .wight-325 {
    width: 325px;
  }

  .height-326 {
    height: 326px !important;
  }

  .wight-326 {
    width: 326px;
  }

  .height-327 {
    height: 327px !important;
  }

  .wight-327 {
    width: 327px;
  }

  .height-328 {
    height: 328px !important;
  }

  .wight-328 {
    width: 328px;
  }

  .height-329 {
    height: 329px !important;
  }

  .wight-329 {
    width: 329px;
  }

  .height-330 {
    height: 330px !important;
  }

  .wight-330 {
    width: 330px;
  }

  .height-331 {
    height: 331px !important;
  }

  .wight-331 {
    width: 331px;
  }

  .height-332 {
    height: 332px !important;
  }

  .wight-332 {
    width: 332px;
  }

  .height-333 {
    height: 333px !important;
  }

  .wight-333 {
    width: 333px;
  }

  .height-334 {
    height: 334px !important;
  }

  .wight-334 {
    width: 334px;
  }

  .height-335 {
    height: 335px !important;
  }

  .wight-335 {
    width: 335px;
  }

  .height-336 {
    height: 336px !important;
  }

  .wight-336 {
    width: 336px;
  }

  .height-337 {
    height: 337px !important;
  }

  .wight-337 {
    width: 337px;
  }

  .height-338 {
    height: 338px !important;
  }

  .wight-338 {
    width: 338px;
  }

  .height-339 {
    height: 339px !important;
  }

  .wight-339 {
    width: 339px;
  }

  .height-340 {
    height: 340px !important;
  }

  .wight-340 {
    width: 340px;
  }

  .height-341 {
    height: 341px !important;
  }

  .wight-341 {
    width: 341px;
  }

  .height-342 {
    height: 342px !important;
  }

  .wight-342 {
    width: 342px;
  }

  .height-343 {
    height: 343px !important;
  }

  .wight-343 {
    width: 343px;
  }

  .height-344 {
    height: 344px !important;
  }

  .wight-344 {
    width: 344px;
  }

  .height-345 {
    height: 345px !important;
  }

  .wight-345 {
    width: 345px;
  }

  .height-346 {
    height: 346px !important;
  }

  .wight-346 {
    width: 346px;
  }

  .height-347 {
    height: 347px !important;
  }

  .wight-347 {
    width: 347px;
  }

  .height-348 {
    height: 348px !important;
  }

  .wight-348 {
    width: 348px;
  }

  .height-349 {
    height: 349px !important;
  }

  .wight-349 {
    width: 349px;
  }

  .height-350 {
    height: 350px !important;
  }

  .wight-350 {
    width: 350px;
  }

  .height-351 {
    height: 351px !important;
  }

  .wight-351 {
    width: 351px;
  }

  .height-352 {
    height: 352px !important;
  }

  .wight-352 {
    width: 352px;
  }

  .height-353 {
    height: 353px !important;
  }

  .wight-353 {
    width: 353px;
  }

  .height-354 {
    height: 354px !important;
  }

  .wight-354 {
    width: 354px;
  }

  .height-355 {
    height: 355px !important;
  }

  .wight-355 {
    width: 355px;
  }

  .height-356 {
    height: 356px !important;
  }

  .wight-356 {
    width: 356px;
  }

  .height-357 {
    height: 357px !important;
  }

  .wight-357 {
    width: 357px;
  }

  .height-358 {
    height: 358px !important;
  }

  .wight-358 {
    width: 358px;
  }

  .height-359 {
    height: 359px !important;
  }

  .wight-359 {
    width: 359px;
  }

  .height-360 {
    height: 360px !important;
  }

  .wight-360 {
    width: 360px;
  }

  .height-361 {
    height: 361px !important;
  }

  .wight-361 {
    width: 361px;
  }

  .height-362 {
    height: 362px !important;
  }

  .wight-362 {
    width: 362px;
  }

  .height-363 {
    height: 363px !important;
  }

  .wight-363 {
    width: 363px;
  }

  .height-364 {
    height: 364px !important;
  }

  .wight-364 {
    width: 364px;
  }

  .height-365 {
    height: 365px !important;
  }

  .wight-365 {
    width: 365px;
  }

  .height-366 {
    height: 366px !important;
  }

  .wight-366 {
    width: 366px;
  }

  .height-367 {
    height: 367px !important;
  }

  .wight-367 {
    width: 367px;
  }

  .height-368 {
    height: 368px !important;
  }

  .wight-368 {
    width: 368px;
  }

  .height-369 {
    height: 369px !important;
  }

  .wight-369 {
    width: 369px;
  }

  .height-370 {
    height: 370px !important;
  }

  .wight-370 {
    width: 370px;
  }

  .height-371 {
    height: 371px !important;
  }

  .wight-371 {
    width: 371px;
  }

  .height-372 {
    height: 372px !important;
  }

  .wight-372 {
    width: 372px;
  }

  .height-373 {
    height: 373px !important;
  }

  .wight-373 {
    width: 373px;
  }

  .height-374 {
    height: 374px !important;
  }

  .wight-374 {
    width: 374px;
  }

  .height-375 {
    height: 375px !important;
  }

  .wight-375 {
    width: 375px;
  }

  .height-376 {
    height: 376px !important;
  }

  .wight-376 {
    width: 376px;
  }

  .height-377 {
    height: 377px !important;
  }

  .wight-377 {
    width: 377px;
  }

  .height-378 {
    height: 378px !important;
  }

  .wight-378 {
    width: 378px;
  }

  .height-379 {
    height: 379px !important;
  }

  .wight-379 {
    width: 379px;
  }

  .height-380 {
    height: 380px !important;
  }

  .wight-380 {
    width: 380px;
  }

  .height-381 {
    height: 381px !important;
  }

  .wight-381 {
    width: 381px;
  }

  .height-382 {
    height: 382px !important;
  }

  .wight-382 {
    width: 382px;
  }

  .height-383 {
    height: 383px !important;
  }

  .wight-383 {
    width: 383px;
  }

  .height-384 {
    height: 384px !important;
  }

  .wight-384 {
    width: 384px;
  }

  .height-385 {
    height: 385px !important;
  }

  .wight-385 {
    width: 385px;
  }

  .height-386 {
    height: 386px !important;
  }

  .wight-386 {
    width: 386px;
  }

  .height-387 {
    height: 387px !important;
  }

  .wight-387 {
    width: 387px;
  }

  .height-388 {
    height: 388px !important;
  }

  .wight-388 {
    width: 388px;
  }

  .height-389 {
    height: 389px !important;
  }

  .wight-389 {
    width: 389px;
  }

  .height-390 {
    height: 390px !important;
  }

  .wight-390 {
    width: 390px;
  }

  .height-391 {
    height: 391px !important;
  }

  .wight-391 {
    width: 391px;
  }

  .height-392 {
    height: 392px !important;
  }

  .wight-392 {
    width: 392px;
  }

  .height-393 {
    height: 393px !important;
  }

  .wight-393 {
    width: 393px;
  }

  .height-394 {
    height: 394px !important;
  }

  .wight-394 {
    width: 394px;
  }

  .height-395 {
    height: 395px !important;
  }

  .wight-395 {
    width: 395px;
  }

  .height-396 {
    height: 396px !important;
  }

  .wight-396 {
    width: 396px;
  }

  .height-397 {
    height: 397px !important;
  }

  .wight-397 {
    width: 397px;
  }

  .height-398 {
    height: 398px !important;
  }

  .wight-398 {
    width: 398px;
  }

  .height-399 {
    height: 399px !important;
  }

  .wight-399 {
    width: 399px;
  }

  .height-400 {
    height: 400px !important;
  }

  .wight-400 {
    width: 400px;
  }

  .height-401 {
    height: 401px !important;
  }

  .wight-401 {
    width: 401px;
  }

  .height-402 {
    height: 402px !important;
  }

  .wight-402 {
    width: 402px;
  }

  .height-403 {
    height: 403px !important;
  }

  .wight-403 {
    width: 403px;
  }

  .height-404 {
    height: 404px !important;
  }

  .wight-404 {
    width: 404px;
  }

  .height-405 {
    height: 405px !important;
  }

  .wight-405 {
    width: 405px;
  }

  .height-406 {
    height: 406px !important;
  }

  .wight-406 {
    width: 406px;
  }

  .height-407 {
    height: 407px !important;
  }

  .wight-407 {
    width: 407px;
  }

  .height-408 {
    height: 408px !important;
  }

  .wight-408 {
    width: 408px;
  }

  .height-409 {
    height: 409px !important;
  }

  .wight-409 {
    width: 409px;
  }

  .height-410 {
    height: 410px !important;
  }

  .wight-410 {
    width: 410px;
  }

  .height-411 {
    height: 411px !important;
  }

  .wight-411 {
    width: 411px;
  }

  .height-412 {
    height: 412px !important;
  }

  .wight-412 {
    width: 412px;
  }

  .height-413 {
    height: 413px !important;
  }

  .wight-413 {
    width: 413px;
  }

  .height-414 {
    height: 414px !important;
  }

  .wight-414 {
    width: 414px;
  }

  .height-415 {
    height: 415px !important;
  }

  .wight-415 {
    width: 415px;
  }

  .height-416 {
    height: 416px !important;
  }

  .wight-416 {
    width: 416px;
  }

  .height-417 {
    height: 417px !important;
  }

  .wight-417 {
    width: 417px;
  }

  .height-418 {
    height: 418px !important;
  }

  .wight-418 {
    width: 418px;
  }

  .height-419 {
    height: 419px !important;
  }

  .wight-419 {
    width: 419px;
  }

  .height-420 {
    height: 420px !important;
  }

  .wight-420 {
    width: 420px;
  }

  .height-421 {
    height: 421px !important;
  }

  .wight-421 {
    width: 421px;
  }

  .height-422 {
    height: 422px !important;
  }

  .wight-422 {
    width: 422px;
  }

  .height-423 {
    height: 423px !important;
  }

  .wight-423 {
    width: 423px;
  }

  .height-424 {
    height: 424px !important;
  }

  .wight-424 {
    width: 424px;
  }

  .height-425 {
    height: 425px !important;
  }

  .wight-425 {
    width: 425px;
  }

  .height-426 {
    height: 426px !important;
  }

  .wight-426 {
    width: 426px;
  }

  .height-427 {
    height: 427px !important;
  }

  .wight-427 {
    width: 427px;
  }

  .height-428 {
    height: 428px !important;
  }

  .wight-428 {
    width: 428px;
  }

  .height-429 {
    height: 429px !important;
  }

  .wight-429 {
    width: 429px;
  }

  .height-430 {
    height: 430px !important;
  }

  .wight-430 {
    width: 430px;
  }

  .height-431 {
    height: 431px !important;
  }

  .wight-431 {
    width: 431px;
  }

  .height-432 {
    height: 432px !important;
  }

  .wight-432 {
    width: 432px;
  }

  .height-433 {
    height: 433px !important;
  }

  .wight-433 {
    width: 433px;
  }

  .height-434 {
    height: 434px !important;
  }

  .wight-434 {
    width: 434px;
  }

  .height-435 {
    height: 435px !important;
  }

  .wight-435 {
    width: 435px;
  }

  .height-436 {
    height: 436px !important;
  }

  .wight-436 {
    width: 436px;
  }

  .height-437 {
    height: 437px !important;
  }

  .wight-437 {
    width: 437px;
  }

  .height-438 {
    height: 438px !important;
  }

  .wight-438 {
    width: 438px;
  }

  .height-439 {
    height: 439px !important;
  }

  .wight-439 {
    width: 439px;
  }

  .height-440 {
    height: 440px !important;
  }

  .wight-440 {
    width: 440px;
  }

  .height-441 {
    height: 441px !important;
  }

  .wight-441 {
    width: 441px;
  }

  .height-442 {
    height: 442px !important;
  }

  .wight-442 {
    width: 442px;
  }

  .height-443 {
    height: 443px !important;
  }

  .wight-443 {
    width: 443px;
  }

  .height-444 {
    height: 444px !important;
  }

  .wight-444 {
    width: 444px;
  }

  .height-445 {
    height: 445px !important;
  }

  .wight-445 {
    width: 445px;
  }

  .height-446 {
    height: 446px !important;
  }

  .wight-446 {
    width: 446px;
  }

  .height-447 {
    height: 447px !important;
  }

  .wight-447 {
    width: 447px;
  }

  .height-448 {
    height: 448px !important;
  }

  .wight-448 {
    width: 448px;
  }

  .height-449 {
    height: 449px !important;
  }

  .wight-449 {
    width: 449px;
  }

  .height-450 {
    height: 450px !important;
  }

  .wight-450 {
    width: 450px;
  }

  .height-451 {
    height: 451px !important;
  }

  .wight-451 {
    width: 451px;
  }

  .height-452 {
    height: 452px !important;
  }

  .wight-452 {
    width: 452px;
  }

  .height-453 {
    height: 453px !important;
  }

  .wight-453 {
    width: 453px;
  }

  .height-454 {
    height: 454px !important;
  }

  .wight-454 {
    width: 454px;
  }

  .height-455 {
    height: 455px !important;
  }

  .wight-455 {
    width: 455px;
  }

  .height-456 {
    height: 456px !important;
  }

  .wight-456 {
    width: 456px;
  }

  .height-457 {
    height: 457px !important;
  }

  .wight-457 {
    width: 457px;
  }

  .height-458 {
    height: 458px !important;
  }

  .wight-458 {
    width: 458px;
  }

  .height-459 {
    height: 459px !important;
  }

  .wight-459 {
    width: 459px;
  }

  .height-460 {
    height: 460px !important;
  }

  .wight-460 {
    width: 460px;
  }

  .height-461 {
    height: 461px !important;
  }

  .wight-461 {
    width: 461px;
  }

  .height-462 {
    height: 462px !important;
  }

  .wight-462 {
    width: 462px;
  }

  .height-463 {
    height: 463px !important;
  }

  .wight-463 {
    width: 463px;
  }

  .height-464 {
    height: 464px !important;
  }

  .wight-464 {
    width: 464px;
  }

  .height-465 {
    height: 465px !important;
  }

  .wight-465 {
    width: 465px;
  }

  .height-466 {
    height: 466px !important;
  }

  .wight-466 {
    width: 466px;
  }

  .height-467 {
    height: 467px !important;
  }

  .wight-467 {
    width: 467px;
  }

  .height-468 {
    height: 468px !important;
  }

  .wight-468 {
    width: 468px;
  }

  .height-469 {
    height: 469px !important;
  }

  .wight-469 {
    width: 469px;
  }

  .height-470 {
    height: 470px !important;
  }

  .wight-470 {
    width: 470px;
  }

  .height-471 {
    height: 471px !important;
  }

  .wight-471 {
    width: 471px;
  }

  .height-472 {
    height: 472px !important;
  }

  .wight-472 {
    width: 472px;
  }

  .height-473 {
    height: 473px !important;
  }

  .wight-473 {
    width: 473px;
  }

  .height-474 {
    height: 474px !important;
  }

  .wight-474 {
    width: 474px;
  }

  .height-475 {
    height: 475px !important;
  }

  .wight-475 {
    width: 475px;
  }

  .height-476 {
    height: 476px !important;
  }

  .wight-476 {
    width: 476px;
  }

  .height-477 {
    height: 477px !important;
  }

  .wight-477 {
    width: 477px;
  }

  .height-478 {
    height: 478px !important;
  }

  .wight-478 {
    width: 478px;
  }

  .height-479 {
    height: 479px !important;
  }

  .wight-479 {
    width: 479px;
  }

  .height-480 {
    height: 480px !important;
  }

  .wight-480 {
    width: 480px;
  }

  .height-481 {
    height: 481px !important;
  }

  .wight-481 {
    width: 481px;
  }

  .height-482 {
    height: 482px !important;
  }

  .wight-482 {
    width: 482px;
  }

  .height-483 {
    height: 483px !important;
  }

  .wight-483 {
    width: 483px;
  }

  .height-484 {
    height: 484px !important;
  }

  .wight-484 {
    width: 484px;
  }

  .height-485 {
    height: 485px !important;
  }

  .wight-485 {
    width: 485px;
  }

  .height-486 {
    height: 486px !important;
  }

  .wight-486 {
    width: 486px;
  }

  .height-487 {
    height: 487px !important;
  }

  .wight-487 {
    width: 487px;
  }

  .height-488 {
    height: 488px !important;
  }

  .wight-488 {
    width: 488px;
  }

  .height-489 {
    height: 489px !important;
  }

  .wight-489 {
    width: 489px;
  }

  .height-490 {
    height: 490px !important;
  }

  .wight-490 {
    width: 490px;
  }

  .height-491 {
    height: 491px !important;
  }

  .wight-491 {
    width: 491px;
  }

  .height-492 {
    height: 492px !important;
  }

  .wight-492 {
    width: 492px;
  }

  .height-493 {
    height: 493px !important;
  }

  .wight-493 {
    width: 493px;
  }

  .height-494 {
    height: 494px !important;
  }

  .wight-494 {
    width: 494px;
  }

  .height-495 {
    height: 495px !important;
  }

  .wight-495 {
    width: 495px;
  }

  .height-496 {
    height: 496px !important;
  }

  .wight-496 {
    width: 496px;
  }

  .height-497 {
    height: 497px !important;
  }

  .wight-497 {
    width: 497px;
  }

  .height-498 {
    height: 498px !important;
  }

  .wight-498 {
    width: 498px;
  }

  .height-499 {
    height: 499px !important;
  }

  .wight-499 {
    width: 499px;
  }

  .height-500 {
    height: 500px !important;
  }

  .wight-500 {
    width: 500px;
  }

  .height-501 {
    height: 501px !important;
  }

  .wight-501 {
    width: 501px;
  }

  .height-502 {
    height: 502px !important;
  }

  .wight-502 {
    width: 502px;
  }

  .height-503 {
    height: 503px !important;
  }

  .wight-503 {
    width: 503px;
  }

  .height-504 {
    height: 504px !important;
  }

  .wight-504 {
    width: 504px;
  }

  .height-505 {
    height: 505px !important;
  }

  .wight-505 {
    width: 505px;
  }

  .height-506 {
    height: 506px !important;
  }

  .wight-506 {
    width: 506px;
  }

  .height-507 {
    height: 507px !important;
  }

  .wight-507 {
    width: 507px;
  }

  .height-508 {
    height: 508px !important;
  }

  .wight-508 {
    width: 508px;
  }

  .height-509 {
    height: 509px !important;
  }

  .wight-509 {
    width: 509px;
  }

  .height-510 {
    height: 510px !important;
  }

  .wight-510 {
    width: 510px;
  }

  .height-511 {
    height: 511px !important;
  }

  .wight-511 {
    width: 511px;
  }

  .height-512 {
    height: 512px !important;
  }

  .wight-512 {
    width: 512px;
  }

  .height-513 {
    height: 513px !important;
  }

  .wight-513 {
    width: 513px;
  }

  .height-514 {
    height: 514px !important;
  }

  .wight-514 {
    width: 514px;
  }

  .height-515 {
    height: 515px !important;
  }

  .wight-515 {
    width: 515px;
  }

  .height-516 {
    height: 516px !important;
  }

  .wight-516 {
    width: 516px;
  }

  .height-517 {
    height: 517px !important;
  }

  .wight-517 {
    width: 517px;
  }

  .height-518 {
    height: 518px !important;
  }

  .wight-518 {
    width: 518px;
  }

  .height-519 {
    height: 519px !important;
  }

  .wight-519 {
    width: 519px;
  }

  .height-520 {
    height: 520px !important;
  }

  .wight-520 {
    width: 520px;
  }

  .height-521 {
    height: 521px !important;
  }

  .wight-521 {
    width: 521px;
  }

  .height-522 {
    height: 522px !important;
  }

  .wight-522 {
    width: 522px;
  }

  .height-523 {
    height: 523px !important;
  }

  .wight-523 {
    width: 523px;
  }

  .height-524 {
    height: 524px !important;
  }

  .wight-524 {
    width: 524px;
  }

  .height-525 {
    height: 525px !important;
  }

  .wight-525 {
    width: 525px;
  }

  .height-526 {
    height: 526px !important;
  }

  .wight-526 {
    width: 526px;
  }

  .height-527 {
    height: 527px !important;
  }

  .wight-527 {
    width: 527px;
  }

  .height-528 {
    height: 528px !important;
  }

  .wight-528 {
    width: 528px;
  }

  .height-529 {
    height: 529px !important;
  }

  .wight-529 {
    width: 529px;
  }

  .height-530 {
    height: 530px !important;
  }

  .wight-530 {
    width: 530px;
  }

  .height-531 {
    height: 531px !important;
  }

  .wight-531 {
    width: 531px;
  }

  .height-532 {
    height: 532px !important;
  }

  .wight-532 {
    width: 532px;
  }

  .height-533 {
    height: 533px !important;
  }

  .wight-533 {
    width: 533px;
  }

  .height-534 {
    height: 534px !important;
  }

  .wight-534 {
    width: 534px;
  }

  .height-535 {
    height: 535px !important;
  }

  .wight-535 {
    width: 535px;
  }

  .height-536 {
    height: 536px !important;
  }

  .wight-536 {
    width: 536px;
  }

  .height-537 {
    height: 537px !important;
  }

  .wight-537 {
    width: 537px;
  }

  .height-538 {
    height: 538px !important;
  }

  .wight-538 {
    width: 538px;
  }

  .height-539 {
    height: 539px !important;
  }

  .wight-539 {
    width: 539px;
  }

  .height-540 {
    height: 540px !important;
  }

  .wight-540 {
    width: 540px;
  }

  .height-541 {
    height: 541px !important;
  }

  .wight-541 {
    width: 541px;
  }

  .height-542 {
    height: 542px !important;
  }

  .wight-542 {
    width: 542px;
  }

  .height-543 {
    height: 543px !important;
  }

  .wight-543 {
    width: 543px;
  }

  .height-544 {
    height: 544px !important;
  }

  .wight-544 {
    width: 544px;
  }

  .height-545 {
    height: 545px !important;
  }

  .wight-545 {
    width: 545px;
  }

  .height-546 {
    height: 546px !important;
  }

  .wight-546 {
    width: 546px;
  }

  .height-547 {
    height: 547px !important;
  }

  .wight-547 {
    width: 547px;
  }

  .height-548 {
    height: 548px !important;
  }

  .wight-548 {
    width: 548px;
  }

  .height-549 {
    height: 549px !important;
  }

  .wight-549 {
    width: 549px;
  }

  .height-550 {
    height: 550px !important;
  }

  .wight-550 {
    width: 550px;
  }

  .height-551 {
    height: 551px !important;
  }

  .wight-551 {
    width: 551px;
  }

  .height-552 {
    height: 552px !important;
  }

  .wight-552 {
    width: 552px;
  }

  .height-553 {
    height: 553px !important;
  }

  .wight-553 {
    width: 553px;
  }

  .height-554 {
    height: 554px !important;
  }

  .wight-554 {
    width: 554px;
  }

  .height-555 {
    height: 555px !important;
  }

  .wight-555 {
    width: 555px;
  }

  .height-556 {
    height: 556px !important;
  }

  .wight-556 {
    width: 556px;
  }

  .height-557 {
    height: 557px !important;
  }

  .wight-557 {
    width: 557px;
  }

  .height-558 {
    height: 558px !important;
  }

  .wight-558 {
    width: 558px;
  }

  .height-559 {
    height: 559px !important;
  }

  .wight-559 {
    width: 559px;
  }

  .height-560 {
    height: 560px !important;
  }

  .wight-560 {
    width: 560px;
  }

  .height-561 {
    height: 561px !important;
  }

  .wight-561 {
    width: 561px;
  }

  .height-562 {
    height: 562px !important;
  }

  .wight-562 {
    width: 562px;
  }

  .height-563 {
    height: 563px !important;
  }

  .wight-563 {
    width: 563px;
  }

  .height-564 {
    height: 564px !important;
  }

  .wight-564 {
    width: 564px;
  }

  .height-565 {
    height: 565px !important;
  }

  .wight-565 {
    width: 565px;
  }

  .height-566 {
    height: 566px !important;
  }

  .wight-566 {
    width: 566px;
  }

  .height-567 {
    height: 567px !important;
  }

  .wight-567 {
    width: 567px;
  }

  .height-568 {
    height: 568px !important;
  }

  .wight-568 {
    width: 568px;
  }

  .height-569 {
    height: 569px !important;
  }

  .wight-569 {
    width: 569px;
  }

  .height-570 {
    height: 570px !important;
  }

  .wight-570 {
    width: 570px;
  }

  .height-571 {
    height: 571px !important;
  }

  .wight-571 {
    width: 571px;
  }

  .height-572 {
    height: 572px !important;
  }

  .wight-572 {
    width: 572px;
  }

  .height-573 {
    height: 573px !important;
  }

  .wight-573 {
    width: 573px;
  }

  .height-574 {
    height: 574px !important;
  }

  .wight-574 {
    width: 574px;
  }

  .height-575 {
    height: 575px !important;
  }

  .wight-575 {
    width: 575px;
  }

  .height-576 {
    height: 576px !important;
  }

  .wight-576 {
    width: 576px;
  }

  .height-577 {
    height: 577px !important;
  }

  .wight-577 {
    width: 577px;
  }

  .height-578 {
    height: 578px !important;
  }

  .wight-578 {
    width: 578px;
  }

  .height-579 {
    height: 579px !important;
  }

  .wight-579 {
    width: 579px;
  }

  .height-580 {
    height: 580px !important;
  }

  .wight-580 {
    width: 580px;
  }

  .height-581 {
    height: 581px !important;
  }

  .wight-581 {
    width: 581px;
  }

  .height-582 {
    height: 582px !important;
  }

  .wight-582 {
    width: 582px;
  }

  .height-583 {
    height: 583px !important;
  }

  .wight-583 {
    width: 583px;
  }

  .height-584 {
    height: 584px !important;
  }

  .wight-584 {
    width: 584px;
  }

  .height-585 {
    height: 585px !important;
  }

  .wight-585 {
    width: 585px;
  }

  .height-586 {
    height: 586px !important;
  }

  .wight-586 {
    width: 586px;
  }

  .height-587 {
    height: 587px !important;
  }

  .wight-587 {
    width: 587px;
  }

  .height-588 {
    height: 588px !important;
  }

  .wight-588 {
    width: 588px;
  }

  .height-589 {
    height: 589px !important;
  }

  .wight-589 {
    width: 589px;
  }

  .height-590 {
    height: 590px !important;
  }

  .wight-590 {
    width: 590px;
  }

  .height-591 {
    height: 591px !important;
  }

  .wight-591 {
    width: 591px;
  }

  .height-592 {
    height: 592px !important;
  }

  .wight-592 {
    width: 592px;
  }

  .height-593 {
    height: 593px !important;
  }

  .wight-593 {
    width: 593px;
  }

  .height-594 {
    height: 594px !important;
  }

  .wight-594 {
    width: 594px;
  }

  .height-595 {
    height: 595px !important;
  }

  .wight-595 {
    width: 595px;
  }

  .height-596 {
    height: 596px !important;
  }

  .wight-596 {
    width: 596px;
  }

  .height-597 {
    height: 597px !important;
  }

  .wight-597 {
    width: 597px;
  }

  .height-598 {
    height: 598px !important;
  }

  .wight-598 {
    width: 598px;
  }

  .height-599 {
    height: 599px !important;
  }

  .wight-599 {
    width: 599px;
  }

  .height-600 {
    height: 600px !important;
  }

  .wight-600 {
    width: 600px;
  }

  /*-- Border Radius --*/
  .radius-0 {
    border-radius: 0px !important;
  }

  .radius-1 {
    border-radius: 1px !important;
  }

  .radius-2 {
    border-radius: 2px !important;
  }

  .radius-3 {
    border-radius: 3px !important;
  }

  .radius-4 {
    border-radius: 4px !important;
  }

  .radius-5 {
    border-radius: 5px !important;
  }

  .radius-6 {
    border-radius: 6px !important;
  }

  .radius-7 {
    border-radius: 7px !important;
  }

  .radius-8 {
    border-radius: 8px !important;
  }

  .radius-9 {
    border-radius: 9px !important;
  }

  .radius-10 {
    border-radius: 10px !important;
  }

  .radius-11 {
    border-radius: 11px !important;
  }

  .radius-12 {
    border-radius: 12px !important;
  }

  .radius-13 {
    border-radius: 13px !important;
  }

  .radius-14 {
    border-radius: 14px !important;
  }

  .radius-15 {
    border-radius: 15px !important;
  }

  .radius-16 {
    border-radius: 16px !important;
  }

  .radius-17 {
    border-radius: 17px !important;
  }

  .radius-18 {
    border-radius: 18px !important;
  }

  .radius-19 {
    border-radius: 19px !important;
  }

  .radius-20 {
    border-radius: 20px !important;
  }

  /*-- Border width --*/
  .border-0 {
    border-width: 0px !important;
  }

  .border-1 {
    border-width: 1px !important;
  }

  .border-2 {
    border-width: 2px !important;
  }

  .border-3 {
    border-width: 3px !important;
  }

  .border-4 {
    border-width: 4px !important;
  }

  .border-5 {
    border-width: 5px !important;
  }

  .border-6 {
    border-width: 6px !important;
  }

  .border-7 {
    border-width: 7px !important;
  }

  .border-8 {
    border-width: 8px !important;
  }

  .border-9 {
    border-width: 9px !important;
  }

  .border-10 {
    border-width: 10px !important;
  }

  /*-- Border color, hover-same color bg and text color white --*/
  .border-success {
    border-color: #3CC13B !important;
    color: #3CC13B;
  }
  .border-success:hover {
    background: #3CC13B !important;
    border-color: transparent !important;
    color: var(--white) !important;
  }

  .border-warning {
    border-color: #F3BB1C !important;
    color: #F3BB1C;
  }
  .border-warning:hover {
    background: #F3BB1C !important;
    border-color: transparent !important;
    color: var(--white) !important;
  }

  .border-error {
    border-color: #F44336 !important;
    color: #F44336;
  }
  .border-error:hover {
    background: #F44336 !important;
    border-color: transparent !important;
    color: var(--white) !important;
  }

  .border-danger {
    border-color: #dc3545 !important;
    color: #dc3545;
  }
  .border-danger:hover {
    background: #dc3545 !important;
    border-color: transparent !important;
    color: var(--white) !important;
  }

  .border-light {
    border-color: #f7f7fd !important;
    color: #f7f7fd;
  }
  .border-light:hover {
    background: #f7f7fd !important;
    border-color: transparent !important;
    color: var(--white) !important;
  }

  .border-green {
    border-color: #4BD865 !important;
    color: #4BD865;
  }
  .border-green:hover {
    background: #4BD865 !important;
    border-color: transparent !important;
    color: var(--white) !important;
  }

  .border-gray {
    border-color: #f7f7fd !important;
    color: #f7f7fd;
  }
  .border-gray:hover {
    background: #f7f7fd !important;
    border-color: transparent !important;
    color: var(--white) !important;
  }

  .border-black {
    border-color: #000000 !important;
    color: #000000;
  }
  .border-black:hover {
    background: #000000 !important;
    border-color: transparent !important;
    color: var(--white) !important;
  }

  .border-white {
    border-color: #ffffff !important;
    color: #ffffff;
  }
  .border-white:hover {
    background: #ffffff !important;
    border-color: transparent !important;
    color: var(--white) !important;
  }

  .border-main-one {
    border-color: var(--primary) !important;
    color: var(--primary);
  }
  .border-main-one:hover {
    background: var(--primary) !important;
    border-color: transparent !important;
    color: var(--white) !important;
  }

  .border-main-two {
    border-color: var(--secondary) !important;
    color: var(--secondary);
  }
  .border-main-two:hover {
    background: var(--secondary) !important;
    border-color: transparent !important;
    color: var(--white) !important;
  }

  .border-color-one {
    border-color: var(--primary-border) !important;
    color: var(--primary-border);
  }
  .border-color-one:hover {
    background: var(--primary-border) !important;
    border-color: transparent !important;
    color: var(--white) !important;
  }

  .border-color-two {
    border-color: var(--secondary-border) !important;
    color: var(--secondary-border);
  }
  .border-color-two:hover {
    background: var(--secondary-border) !important;
    border-color: transparent !important;
    color: var(--white) !important;
  }

  /*-- Border Style --*/
  .border-style-solid {
    border-style: solid !important;
  }

  .border-style-dashed {
    border-style: dashed !important;
  }

  .border-style-none {
    border-style: none !important;
  }

  .border-style-unset {
    border-style: unset !important;
  }

  .border-style-hidden {
    border-style: hidden !important;
  }

  .border-style-dotted {
    border-style: dotted !important;
  }

  .border-style-double {
    border-style: double !important;
  }

  .border-style-inherit {
    border-style: inherit !important;
  }

  .gap-0 {
    grid-gap: 0px !important;
  }

  .gap-1 {
    grid-gap: 1px !important;
  }

  .gap-2 {
    grid-gap: 2px !important;
  }

  .gap-3 {
    grid-gap: 3px !important;
  }

  .gap-4 {
    grid-gap: 4px !important;
  }

  .gap-5 {
    grid-gap: 5px !important;
  }

  .gap-6 {
    grid-gap: 6px !important;
  }

  .gap-7 {
    grid-gap: 7px !important;
  }

  .gap-8 {
    grid-gap: 8px !important;
  }

  .gap-9 {
    grid-gap: 9px !important;
  }

  .gap-10 {
    grid-gap: 10px !important;
  }

  .gap-11 {
    grid-gap: 11px !important;
  }

  .gap-12 {
    grid-gap: 12px !important;
  }

  .gap-13 {
    grid-gap: 13px !important;
  }

  .gap-14 {
    grid-gap: 14px !important;
  }

  .gap-15 {
    grid-gap: 15px !important;
  }

  .gap-16 {
    grid-gap: 16px !important;
  }

  .gap-17 {
    grid-gap: 17px !important;
  }

  .gap-18 {
    grid-gap: 18px !important;
  }

  .gap-19 {
    grid-gap: 19px !important;
  }

  .gap-20 {
    grid-gap: 20px !important;
  }

  .gap-21 {
    grid-gap: 21px !important;
  }

  .gap-22 {
    grid-gap: 22px !important;
  }

  .gap-23 {
    grid-gap: 23px !important;
  }

  .gap-24 {
    grid-gap: 24px !important;
  }

  .gap-25 {
    grid-gap: 25px !important;
  }

  .gap-26 {
    grid-gap: 26px !important;
  }

  .gap-27 {
    grid-gap: 27px !important;
  }

  .gap-28 {
    grid-gap: 28px !important;
  }

  .gap-29 {
    grid-gap: 29px !important;
  }

  .gap-30 {
    grid-gap: 30px !important;
  }

  .gap-31 {
    grid-gap: 31px !important;
  }

  .gap-32 {
    grid-gap: 32px !important;
  }

  .gap-33 {
    grid-gap: 33px !important;
  }

  .gap-34 {
    grid-gap: 34px !important;
  }

  .gap-35 {
    grid-gap: 35px !important;
  }

  .gap-36 {
    grid-gap: 36px !important;
  }

  .gap-37 {
    grid-gap: 37px !important;
  }

  .gap-38 {
    grid-gap: 38px !important;
  }

  .gap-39 {
    grid-gap: 39px !important;
  }

  .gap-40 {
    grid-gap: 40px !important;
  }

  .gap-41 {
    grid-gap: 41px !important;
  }

  .gap-42 {
    grid-gap: 42px !important;
  }

  .gap-43 {
    grid-gap: 43px !important;
  }

  .gap-44 {
    grid-gap: 44px !important;
  }

  .gap-45 {
    grid-gap: 45px !important;
  }

  .gap-46 {
    grid-gap: 46px !important;
  }

  .gap-47 {
    grid-gap: 47px !important;
  }

  .gap-48 {
    grid-gap: 48px !important;
  }

  .gap-49 {
    grid-gap: 49px !important;
  }

  .gap-50 {
    grid-gap: 50px !important;
  }

  .p-static {
    position: static;
  }

  .p-absolute {
    position: absolute;
  }

  .p-fixed {
    position: fixed;
  }

  .p-relative {
    position: relative;
  }

  .p-initial {
    position: initial;
  }

  .p-inherit {
    position: inherit;
  }

  .o-hidden {
    overflow: hidden;
  }

  .o-visible {
    overflow: visible;
  }

  .o-auto {
    overflow: auto;
  }

  .text-1 {
    font-size: 1px !important;
  }

  .text-2 {
    font-size: 2px !important;
  }

  .text-3 {
    font-size: 3px !important;
  }

  .text-4 {
    font-size: 4px !important;
  }

  .text-5 {
    font-size: 5px !important;
  }

  .text-6 {
    font-size: 6px !important;
  }

  .text-7 {
    font-size: 7px !important;
  }

  .text-8 {
    font-size: 8px !important;
  }

  .text-9 {
    font-size: 9px !important;
  }

  .text-10 {
    font-size: 10px !important;
  }

  .text-11 {
    font-size: 11px !important;
  }

  .text-12 {
    font-size: 12px !important;
  }

  .text-13 {
    font-size: 13px !important;
  }

  .text-14 {
    font-size: 14px !important;
  }

  .text-15 {
    font-size: 15px !important;
  }

  .text-16 {
    font-size: 16px !important;
  }

  .text-17 {
    font-size: 17px !important;
  }

  .text-18 {
    font-size: 18px !important;
  }

  .text-19 {
    font-size: 19px !important;
  }

  .text-20 {
    font-size: 20px !important;
  }

  .text-21 {
    font-size: 21px !important;
  }

  .text-22 {
    font-size: 22px !important;
  }

  .text-23 {
    font-size: 23px !important;
  }

  .text-24 {
    font-size: 24px !important;
  }

  .text-25 {
    font-size: 25px !important;
  }

  .text-26 {
    font-size: 26px !important;
  }

  .text-27 {
    font-size: 27px !important;
  }

  .text-28 {
    font-size: 28px !important;
  }

  .text-29 {
    font-size: 29px !important;
  }

  .text-30 {
    font-size: 30px !important;
  }

  .text-31 {
    font-size: 31px !important;
  }

  .text-32 {
    font-size: 32px !important;
  }

  .text-33 {
    font-size: 33px !important;
  }

  .text-34 {
    font-size: 34px !important;
  }

  .text-35 {
    font-size: 35px !important;
  }

  .text-36 {
    font-size: 36px !important;
  }

  .text-37 {
    font-size: 37px !important;
  }

  .text-38 {
    font-size: 38px !important;
  }

  .text-39 {
    font-size: 39px !important;
  }

  .text-40 {
    font-size: 40px !important;
  }

  .text-41 {
    font-size: 41px !important;
  }

  .text-42 {
    font-size: 42px !important;
  }

  .text-43 {
    font-size: 43px !important;
  }

  .text-44 {
    font-size: 44px !important;
  }

  .text-45 {
    font-size: 45px !important;
  }

  .text-46 {
    font-size: 46px !important;
  }

  .text-47 {
    font-size: 47px !important;
  }

  .text-48 {
    font-size: 48px !important;
  }

  .text-49 {
    font-size: 49px !important;
  }

  .text-50 {
    font-size: 50px !important;
  }

  .font-100 {
    font-weight: 100;
  }

  .font-200 {
    font-weight: 200;
  }

  .font-300 {
    font-weight: 300;
  }

  .font-400 {
    font-weight: 400;
  }

  .font-500 {
    font-weight: 500;
  }

  .font-600 {
    font-weight: 600;
  }

  .font-700 {
    font-weight: 700;
  }

  .font-800 {
    font-weight: 800;
  }

  .font-900 {
    font-weight: 900;
  }

  .text-primary {
    color: var(--primary) !important;
  }

  .text-secondary {
    color: var(--secondary) !important;
  }

  .text-tertiary {
    color: var(--tertiary) !important;
  }

  .text-success {
    color: #3CC13B !important;
  }

  .text-danger {
    color: #dc3545 !important;
  }

  .text-info {
    color: #f7f7fd !important;
  }

  .text-light {
    color: #f7f7fd !important;
  }

  .text-dark {
    color: #000000 !important;
  }

  .text-white {
    color: var(--white) !important;
  }

  .text-warning {
    color: #F3BB1C !important;
  }

  .text-title {
    color: var(--primary-title) !important;
  }

  .text-orange {
    color: orange !important;
  }

  .label-theme {
    background-color: var(--primary);
  }

  .label-primary {
    background-color: var(--primary);
  }

  .label-secondary {
    background-color: var(--secondary);
  }

  .label-success {
    background-color: #3CC13B;
  }

  .label-danger {
    background-color: #dc3545;
  }

  .label-info {
    background-color: #f7f7fd;
  }

  .label-light {
    background-color: #f7f7fd;
  }

  .label-dark {
    background-color: #000000;
  }

  .label-warning {
    background-color: #F3BB1C;
  }

  .text-title {
    color: var(--primary-title) !important;
  }

  .text-paragraph {
    color: var(--primary-paragraph) !important;
  }

  .text-primary {
    color: var(--primary) !important;
  }

  .text-secondary {
    color: var(--secondary) !important;
  }

  .text-tertiary {
    color: var(--tertiary) !important;
  }

  .text-success {
    color: var(--secondary) !important;
  }

  .text-danger {
    color: #3CC13B !important;
  }

  .text-info {
    color: #dc3545 !important;
  }

  .text-light {
    color: #f7f7fd !important;
  }

  .text-dark {
    color: #f7f7fd !important;
  }

  .text-warning {
    color: #000000 !important;
  }

  .text-google-plus {
    color: #F3BB1C !important;
  }

  .text-twitter {
    color: #dd4b39 !important;
  }

  .text-linkedin {
    color: #55acee !important;
  }

  .text-fb {
    color: #0077b5 !important;
  }

  .txt-white {
    color: #ffffff !important;
  }

  /*---------------------------------------------
  Background-color Makes CSS Class 
  -----------------------------------------------*/
  .bg-primary {
    background-color: var(--primary) !important;
  }

  .bg-secondary {
    background-color: var(--secondary) !important;
  }

  .bg-success {
    background-color: #3CC13B !important;
  }

  .bg-danger {
    background-color: #dc3545 !important;
  }

  .bg-info {
    background-color: #f7f7fd !important;
  }

  .bg-light {
    background-color: #f7f7fd !important;
  }

  .bg-dark {
    background-color: #000000 !important;
  }

  .bg-warning {
    background-color: #F3BB1C !important;
  }

  .btn-primary {
    background-color: var(--primary) !important;
    border-color: var(--primary) !important;
  }
  .btn-primary.disabled, .btn-primary:disabled {
    background-color: var(--primary) !important;
    border-color: var(--primary) !important;
  }
  .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active {
    border-color: var(--primary);
  }

  .btn-secondary {
    background-color: var(--secondary) !important;
    border-color: var(--secondary) !important;
  }
  .btn-secondary.disabled, .btn-secondary:disabled {
    background-color: var(--secondary) !important;
    border-color: var(--secondary) !important;
  }
  .btn-secondary:hover, .btn-secondary:focus, .btn-secondary:active, .btn-secondary.active {
    border-color: var(--primary);
  }

  .btn-success {
    background-color: #3CC13B !important;
    border-color: #3CC13B !important;
  }
  .btn-success.disabled, .btn-success:disabled {
    background-color: #3CC13B !important;
    border-color: #3CC13B !important;
  }
  .btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active {
    border-color: var(--primary);
  }

  .btn-danger {
    background-color: #dc3545 !important;
    border-color: #dc3545 !important;
  }
  .btn-danger.disabled, .btn-danger:disabled {
    background-color: #dc3545 !important;
    border-color: #dc3545 !important;
  }
  .btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active {
    border-color: var(--primary);
  }

  .btn-info {
    background-color: #f7f7fd !important;
    border-color: #f7f7fd !important;
  }
  .btn-info.disabled, .btn-info:disabled {
    background-color: #f7f7fd !important;
    border-color: #f7f7fd !important;
  }
  .btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active {
    border-color: var(--primary);
  }

  .btn-light {
    background-color: #f7f7fd !important;
    border-color: #f7f7fd !important;
  }
  .btn-light.disabled, .btn-light:disabled {
    background-color: #f7f7fd !important;
    border-color: #f7f7fd !important;
  }
  .btn-light:hover, .btn-light:focus, .btn-light:active, .btn-light.active {
    border-color: var(--primary);
  }

  .btn-dark {
    background-color: #000000 !important;
    border-color: #000000 !important;
  }
  .btn-dark.disabled, .btn-dark:disabled {
    background-color: #000000 !important;
    border-color: #000000 !important;
  }
  .btn-dark:hover, .btn-dark:focus, .btn-dark:active, .btn-dark.active {
    border-color: var(--primary);
  }

  .btn-warning {
    background-color: #F3BB1C !important;
    border-color: #F3BB1C !important;
  }
  .btn-warning.disabled, .btn-warning:disabled {
    background-color: #F3BB1C !important;
    border-color: #F3BB1C !important;
  }
  .btn-warning:hover, .btn-warning:focus, .btn-warning:active, .btn-warning.active {
    border-color: var(--primary);
  }

  .btn-primary-light {
    background-color: rgba(var(--primary), 0.1) !important;
    border: none !important;
    color: var(--primary);
    -webkit-transition: 0.5s;
    transition: 0.5s;
  }
  .btn-primary-light:focus, .btn-primary-light:hover {
    background-color: rgba(var(--primary), 0.5) !important;
    color: var(--white);
    -webkit-transition: 0.5s;
    transition: 0.5s;
  }

  /*======= Button-color css ends  ======= */
  .btn-outline-primary-2x {
    border-width: 2px;
    border-color: var(--primary);
    color: var(--primary);
    background-color: transparent;
  }
  .btn-outline-primary-2x:hover, .btn-outline-primary-2x:focus, .btn-outline-primary-2x:active, .btn-outline-primary-2x.active {
    color: white;
    -webkit-box-shadow: none;
            box-shadow: none;
    border-color: var(--primary);
  }

  .btn-outline-secondary-2x {
    border-width: 2px;
    border-color: var(--secondary);
    color: var(--secondary);
    background-color: transparent;
  }
  .btn-outline-secondary-2x:hover, .btn-outline-secondary-2x:focus, .btn-outline-secondary-2x:active, .btn-outline-secondary-2x.active {
    color: white;
    -webkit-box-shadow: none;
            box-shadow: none;
    border-color: var(--primary);
  }

  .btn-outline-success-2x {
    border-width: 2px;
    border-color: #3CC13B;
    color: #3CC13B;
    background-color: transparent;
  }
  .btn-outline-success-2x:hover, .btn-outline-success-2x:focus, .btn-outline-success-2x:active, .btn-outline-success-2x.active {
    color: white;
    -webkit-box-shadow: none;
            box-shadow: none;
    border-color: var(--primary);
  }

  .btn-outline-danger-2x {
    border-width: 2px;
    border-color: #dc3545;
    color: #dc3545;
    background-color: transparent;
  }
  .btn-outline-danger-2x:hover, .btn-outline-danger-2x:focus, .btn-outline-danger-2x:active, .btn-outline-danger-2x.active {
    color: white;
    -webkit-box-shadow: none;
            box-shadow: none;
    border-color: var(--primary);
  }

  .btn-outline-info-2x {
    border-width: 2px;
    border-color: #f7f7fd;
    color: #f7f7fd;
    background-color: transparent;
  }
  .btn-outline-info-2x:hover, .btn-outline-info-2x:focus, .btn-outline-info-2x:active, .btn-outline-info-2x.active {
    color: white;
    -webkit-box-shadow: none;
            box-shadow: none;
    border-color: var(--primary);
  }

  .btn-outline-light-2x {
    border-width: 2px;
    border-color: #f7f7fd;
    color: #f7f7fd;
    background-color: transparent;
  }
  .btn-outline-light-2x:hover, .btn-outline-light-2x:focus, .btn-outline-light-2x:active, .btn-outline-light-2x.active {
    color: white;
    -webkit-box-shadow: none;
            box-shadow: none;
    border-color: var(--primary);
  }

  .btn-outline-dark-2x {
    border-width: 2px;
    border-color: #000000;
    color: #000000;
    background-color: transparent;
  }
  .btn-outline-dark-2x:hover, .btn-outline-dark-2x:focus, .btn-outline-dark-2x:active, .btn-outline-dark-2x.active {
    color: white;
    -webkit-box-shadow: none;
            box-shadow: none;
    border-color: var(--primary);
  }

  .btn-outline-warning-2x {
    border-width: 2px;
    border-color: #F3BB1C;
    color: #F3BB1C;
    background-color: transparent;
  }
  .btn-outline-warning-2x:hover, .btn-outline-warning-2x:focus, .btn-outline-warning-2x:active, .btn-outline-warning-2x.active {
    color: white;
    -webkit-box-shadow: none;
            box-shadow: none;
    border-color: var(--primary);
  }

  .btn-outline-primary {
    border-color: var(--primary);
    color: var(--primary);
    background-color: transparent;
  }
  .btn-outline-primary.disabled {
    color: var(--primary);
  }
  .btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active, .btn-outline-primary.active {
    color: white;
    border-color: var(--primary);
  }

  .btn-outline-secondary {
    border-color: var(--secondary);
    color: var(--secondary);
    background-color: transparent;
  }
  .btn-outline-secondary.disabled {
    color: var(--secondary);
  }
  .btn-outline-secondary:hover, .btn-outline-secondary:focus, .btn-outline-secondary:active, .btn-outline-secondary.active {
    color: white;
    border-color: var(--primary);
  }

  .btn-outline-success {
    border-color: #3CC13B;
    color: #3CC13B;
    background-color: transparent;
  }
  .btn-outline-success.disabled {
    color: #3CC13B;
  }
  .btn-outline-success:hover, .btn-outline-success:focus, .btn-outline-success:active, .btn-outline-success.active {
    color: white;
    border-color: var(--primary);
  }

  .btn-outline-danger {
    border-color: #dc3545;
    color: #dc3545;
    background-color: transparent;
  }
  .btn-outline-danger.disabled {
    color: #dc3545;
  }
  .btn-outline-danger:hover, .btn-outline-danger:focus, .btn-outline-danger:active, .btn-outline-danger.active {
    color: white;
    border-color: var(--primary);
  }

  .btn-outline-info {
    border-color: #f7f7fd;
    color: #f7f7fd;
    background-color: transparent;
  }
  .btn-outline-info.disabled {
    color: #f7f7fd;
  }
  .btn-outline-info:hover, .btn-outline-info:focus, .btn-outline-info:active, .btn-outline-info.active {
    color: white;
    border-color: var(--primary);
  }

  .btn-outline-light {
    border-color: #f7f7fd;
    color: #f7f7fd;
    background-color: transparent;
    color: var(--primary-title);
  }
  .btn-outline-light.disabled {
    color: #f7f7fd;
  }
  .btn-outline-light:hover, .btn-outline-light:focus, .btn-outline-light:active, .btn-outline-light.active {
    color: white;
    border-color: var(--primary);
  }

  .btn-outline-dark {
    border-color: #000000;
    color: #000000;
    background-color: transparent;
  }
  .btn-outline-dark.disabled {
    color: #000000;
  }
  .btn-outline-dark:hover, .btn-outline-dark:focus, .btn-outline-dark:active, .btn-outline-dark.active {
    color: white;
    border-color: var(--primary);
  }

  .btn-outline-warning {
    border-color: #F3BB1C;
    color: #F3BB1C;
    background-color: transparent;
  }
  .btn-outline-warning.disabled {
    color: #F3BB1C;
  }
  .btn-outline-warning:hover, .btn-outline-warning:focus, .btn-outline-warning:active, .btn-outline-warning.active {
    color: white;
    border-color: var(--primary);
  }

  .btn-outline-primary-2x:not([disabled]):not(.disabled).active {
    background-color: var(--primary);
    border-color: var(--primary);
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
    color: white;
  }
  .btn-outline-primary-2x:not([disabled]):not(.disabled).active:hover, .btn-outline-primary-2x:not([disabled]):not(.disabled).active:focus, .btn-outline-primary-2x:not([disabled]):not(.disabled).active:active, .btn-outline-primary-2x:not([disabled]):not(.disabled).active.active {
    color: white;
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
    border-color: var(--primary);
  }

  .btn-outline-secondary-2x:not([disabled]):not(.disabled).active {
    background-color: var(--secondary);
    border-color: var(--secondary);
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
    color: white;
  }
  .btn-outline-secondary-2x:not([disabled]):not(.disabled).active:hover, .btn-outline-secondary-2x:not([disabled]):not(.disabled).active:focus, .btn-outline-secondary-2x:not([disabled]):not(.disabled).active:active, .btn-outline-secondary-2x:not([disabled]):not(.disabled).active.active {
    color: white;
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
    border-color: var(--primary);
  }

  .btn-outline-success-2x:not([disabled]):not(.disabled).active {
    background-color: #3CC13B;
    border-color: #3CC13B;
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
    color: white;
  }
  .btn-outline-success-2x:not([disabled]):not(.disabled).active:hover, .btn-outline-success-2x:not([disabled]):not(.disabled).active:focus, .btn-outline-success-2x:not([disabled]):not(.disabled).active:active, .btn-outline-success-2x:not([disabled]):not(.disabled).active.active {
    color: white;
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
    border-color: var(--primary);
  }

  .btn-outline-danger-2x:not([disabled]):not(.disabled).active {
    background-color: #dc3545;
    border-color: #dc3545;
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
    color: white;
  }
  .btn-outline-danger-2x:not([disabled]):not(.disabled).active:hover, .btn-outline-danger-2x:not([disabled]):not(.disabled).active:focus, .btn-outline-danger-2x:not([disabled]):not(.disabled).active:active, .btn-outline-danger-2x:not([disabled]):not(.disabled).active.active {
    color: white;
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
    border-color: var(--primary);
  }

  .btn-outline-info-2x:not([disabled]):not(.disabled).active {
    background-color: #f7f7fd;
    border-color: #f7f7fd;
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
    color: white;
  }
  .btn-outline-info-2x:not([disabled]):not(.disabled).active:hover, .btn-outline-info-2x:not([disabled]):not(.disabled).active:focus, .btn-outline-info-2x:not([disabled]):not(.disabled).active:active, .btn-outline-info-2x:not([disabled]):not(.disabled).active.active {
    color: white;
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
    border-color: var(--primary);
  }

  .btn-outline-light-2x:not([disabled]):not(.disabled).active {
    background-color: #f7f7fd;
    border-color: #f7f7fd;
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
    color: white;
  }
  .btn-outline-light-2x:not([disabled]):not(.disabled).active:hover, .btn-outline-light-2x:not([disabled]):not(.disabled).active:focus, .btn-outline-light-2x:not([disabled]):not(.disabled).active:active, .btn-outline-light-2x:not([disabled]):not(.disabled).active.active {
    color: white;
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
    border-color: var(--primary);
  }

  .btn-outline-dark-2x:not([disabled]):not(.disabled).active {
    background-color: #000000;
    border-color: #000000;
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
    color: white;
  }
  .btn-outline-dark-2x:not([disabled]):not(.disabled).active:hover, .btn-outline-dark-2x:not([disabled]):not(.disabled).active:focus, .btn-outline-dark-2x:not([disabled]):not(.disabled).active:active, .btn-outline-dark-2x:not([disabled]):not(.disabled).active.active {
    color: white;
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
    border-color: var(--primary);
  }

  .btn-outline-warning-2x:not([disabled]):not(.disabled).active {
    background-color: #F3BB1C;
    border-color: #F3BB1C;
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
    color: white;
  }
  .btn-outline-warning-2x:not([disabled]):not(.disabled).active:hover, .btn-outline-warning-2x:not([disabled]):not(.disabled).active:focus, .btn-outline-warning-2x:not([disabled]):not(.disabled).active:active, .btn-outline-warning-2x:not([disabled]):not(.disabled).active.active {
    color: white;
    -webkit-box-shadow: none !important;
            box-shadow: none !important;
    border-color: var(--primary);
  }

  table thead .border-bottom-primary th,
  table tbody .border-bottom-primary th,
  table tbody .border-bottom-primary td {
    border-bottom: 1px solid var(--primary);
  }

  table thead .border-bottom-secondary th,
  table tbody .border-bottom-secondary th,
  table tbody .border-bottom-secondary td {
    border-bottom: 1px solid var(--secondary);
  }

  table thead .border-bottom-success th,
  table tbody .border-bottom-success th,
  table tbody .border-bottom-success td {
    border-bottom: 1px solid #3CC13B;
  }

  table thead .border-bottom-danger th,
  table tbody .border-bottom-danger th,
  table tbody .border-bottom-danger td {
    border-bottom: 1px solid #dc3545;
  }

  table thead .border-bottom-info th,
  table tbody .border-bottom-info th,
  table tbody .border-bottom-info td {
    border-bottom: 1px solid #f7f7fd;
  }

  table thead .border-bottom-light th,
  table tbody .border-bottom-light th,
  table tbody .border-bottom-light td {
    border-bottom: 1px solid #f7f7fd;
  }

  table thead .border-bottom-dark th,
  table tbody .border-bottom-dark th,
  table tbody .border-bottom-dark td {
    border-bottom: 1px solid #000000;
  }

  table thead .border-bottom-warning th,
  table tbody .border-bottom-warning th,
  table tbody .border-bottom-warning td {
    border-bottom: 1px solid #F3BB1C;
  }

  .b-primary {
    border: 1px solid var(--primary) !important;
  }

  .b-t-primary {
    border-top: 1px solid var(--primary) !important;
  }

  .b-b-primary {
    border-bottom: 1px solid var(--primary) !important;
  }

  .b-l-primary {
    border-left: 1px solid var(--primary) !important;
  }

  .b-r-primary {
    border-right: 1px solid var(--primary) !important;
  }

  .b-secondary {
    border: 1px solid var(--secondary) !important;
  }

  .b-t-secondary {
    border-top: 1px solid var(--secondary) !important;
  }

  .b-b-secondary {
    border-bottom: 1px solid var(--secondary) !important;
  }

  .b-l-secondary {
    border-left: 1px solid var(--secondary) !important;
  }

  .b-r-secondary {
    border-right: 1px solid var(--secondary) !important;
  }

  .b-success {
    border: 1px solid #3CC13B !important;
  }

  .b-t-success {
    border-top: 1px solid #3CC13B !important;
  }

  .b-b-success {
    border-bottom: 1px solid #3CC13B !important;
  }

  .b-l-success {
    border-left: 1px solid #3CC13B !important;
  }

  .b-r-success {
    border-right: 1px solid #3CC13B !important;
  }

  .b-danger {
    border: 1px solid #dc3545 !important;
  }

  .b-t-danger {
    border-top: 1px solid #dc3545 !important;
  }

  .b-b-danger {
    border-bottom: 1px solid #dc3545 !important;
  }

  .b-l-danger {
    border-left: 1px solid #dc3545 !important;
  }

  .b-r-danger {
    border-right: 1px solid #dc3545 !important;
  }

  .b-info {
    border: 1px solid #f7f7fd !important;
  }

  .b-t-info {
    border-top: 1px solid #f7f7fd !important;
  }

  .b-b-info {
    border-bottom: 1px solid #f7f7fd !important;
  }

  .b-l-info {
    border-left: 1px solid #f7f7fd !important;
  }

  .b-r-info {
    border-right: 1px solid #f7f7fd !important;
  }

  .b-light {
    border: 1px solid #f7f7fd !important;
  }

  .b-t-light {
    border-top: 1px solid #f7f7fd !important;
  }

  .b-b-light {
    border-bottom: 1px solid #f7f7fd !important;
  }

  .b-l-light {
    border-left: 1px solid #f7f7fd !important;
  }

  .b-r-light {
    border-right: 1px solid #f7f7fd !important;
  }

  .b-dark {
    border: 1px solid #000000 !important;
  }

  .b-t-dark {
    border-top: 1px solid #000000 !important;
  }

  .b-b-dark {
    border-bottom: 1px solid #000000 !important;
  }

  .b-l-dark {
    border-left: 1px solid #000000 !important;
  }

  .b-r-dark {
    border-right: 1px solid #000000 !important;
  }

  .b-warning {
    border: 1px solid #F3BB1C !important;
  }

  .b-t-warning {
    border-top: 1px solid #F3BB1C !important;
  }

  .b-b-warning {
    border-bottom: 1px solid #F3BB1C !important;
  }

  .b-l-warning {
    border-left: 1px solid #F3BB1C !important;
  }

  .b-r-warning {
    border-right: 1px solid #F3BB1C !important;
  }

  .text-white {
    color: #ffffff !important;
  }

  .text-warning {
    color: #F3BB1C !important;
  }

  .text-danger {
    color: #dc3545 !important;
  }

  .text-success {
    color: #3CC13B !important;
  }

  .text-success {
    color: #3CC13B !important;
  }

  .text-error {
    color: #F44336 !important;
  }

  .text-blue {
    color: #11cdef !important;
  }

  .font-weight-600 {
    font-weight: 600px;
  }

  .bg-danger {
    background-color: #dc3545 !important;
  }

  .bg-warning {
    background-color: #F3BB1C !important;
  }

  .bg-success {
    background-color: #3CC13B !important;
  }

  .bg-error {
    background-color: #F44336 !important;
  }

  .bg-blue {
    background-color: #11cdef !important;
  }

  .bg-primary {
    background-color: var(--primary) !important;
  }

  .bg-secondary {
    background-color: var(--secondary) !important;
  }

  .bg-tertiary {
    background-color: var(--tertiary) !important;
  }

  .bg-danger-soft {
    background-color: rgba(220, 53, 69, 0.1) !important;
  }

  .bg-warning-soft {
    background-color: rgba(243, 187, 28, 0.1) !important;
  }

  .bg-success-soft {
    background-color: rgba(60, 193, 59, 0.1) !important;
  }

  .bg-error-soft {
    background-color: rgba(220, 53, 69, 0.1) !important;
  }

  .bg-blue-soft {
    background-color: rgba(17, 205, 239, 0.1) !important;
  }

  .main-bg-one {
    background-color: var(--primary);
  }

  .main-bg-two {
    background-color: var(--main-color-tow);
  }

  .main-bg-three {
    background-color: var(--main-color-three);
  }

  .main-bg-four {
    background-color: var(--main-color-four);
  }

  .main-bg-five {
    background-color: var(--main-color-five);
  }

  .bg-danger-gradient {
    background: -webkit-gradient(linear, left top, right top, from(#fe7096), to(#ffbf96));
    background: linear-gradient(90deg, #fe7096, #ffbf96);
    -webkit-transition: all 0.6s ease-out 0s;
    transition: all 0.6s ease-out 0s;
  }

  .bg-success-gradient {
    background: -webkit-gradient(linear, left top, right top, from(#07cdae), to(#84d9d2));
    background: linear-gradient(90deg, #07cdae, #84d9d2);
  }

  .bg-warning-gradient {
    background: -webkit-gradient(linear, left top, right top, from(#ffd500), to(#f6e384));
    background: linear-gradient(90deg, #ffd500, #f6e384);
  }

  .bg-beguni-gradient {
    background: -webkit-gradient(linear, left top, right top, from(#9a55ff), to(#da8cff));
    background: linear-gradient(90deg, #9a55ff, #da8cff);
  }

  .bg-blue-gradient {
    background: -webkit-gradient(linear, left top, right top, from(#047edf), color-stop(99%, #90caf9));
    background: linear-gradient(90deg, #047edf, #90caf9 99%);
  }

  .bg-orange-gradient {
    background: -webkit-gradient(linear, left top, right top, from(#1B5661), color-stop(99%, #989898));
    background: linear-gradient(90deg, #1B5661, #989898 99%);
  }

  .bg-romance-gradient {
    background: -webkit-gradient(linear, left top, right top, from(#BE3664), color-stop(99%, #222771));
    background: linear-gradient(90deg, #BE3664, #222771 99%);
  }

  .bg-tea-gradient {
    background: -webkit-gradient(linear, left top, right top, from(#6CAD7E), color-stop(99%, #175360));
    background: linear-gradient(90deg, #6CAD7E, #175360 99%);
  }

  .bg-royal-gradient {
    background: -webkit-gradient(linear, left top, right top, from(#AA3475), color-stop(99%, #CB7326));
    background: linear-gradient(90deg, #AA3475, #CB7326 99%);
  }

  /*-------------  Color Witch Class Name  --------------*/
  .section-bg-one {
    background: var(--section-bg-one);
  }

  .section-bg-two {
    background: var(--section-bg-two);
  }

  .section-bg-three {
    background: var(--section-bg-three);
  }

  .white-bg {
    background: var(--white);
  }

  .black-bg {
    background: #000000 !important;
  }

  .main-color-one {
    color: var(--primary);
  }

  .main-color-two {
    color: var(--secondary);
  }

  .main-color-three {
    color: var(--main-color-three);
  }

  .heading-color-one {
    color: var(--primary-title) !important;
  }

  .heading-color-two {
    color: var(--secondary-title) !important;
  }

  .paragraph-color-one {
    color: var(--primary-paragraph) !important;
  }

  .paragraph-color-two {
    color: var(--secondary-paragraph) !important;
  }

  .color-paragraph {
    color: var(--paragraph-color);
  }

  .gray-bg {
    background: #f5f5f5;
  }

  .white-bg {
    background: var(--white);
  }

  .black-bg {
    background: #000000;
  }

  .g-24 {
    --bs-gutter-y: 24px !important;
  }

  .height-100vh {
    height: 100vh;
  }

  .panel-bg {
    background-color: var(--panel-bg) !important;
  }

  .facebook {
    background: #3b5999 !important;
    color: var(--white) !important;
  }

  .twitter {
    background: #55acee !important;
    color: var(--white) !important;
  }

  .linkedin {
    background: #0077b5 !important;
    color: var(--white) !important;
  }

  .share-btn {
    background: var(--section-bg-two) !important;
    color: var(--primary-title) !important;
  }

  .color-effect {
    background-image: -webkit-gradient(linear, left top, right top, color-stop(45%, var(--primary)), color-stop(55%, var(--primay-title)));
    background-image: linear-gradient(to right, var(--primary) 45%, var(--primay-title) 55%);
    background-size: 220% 100%;
    background-position: 100% 50%;
    cursor: pointer;
    color: transparent;
    -webkit-background-clip: text;
    background-clip: text;
    background-repeat: no-repeat;
    -webkit-transition: 0.9s ease-out;
    transition: 0.9s ease-out;
  }
  .color-effect:hover {
    background-position: 0% 50%;
  }

  .theme-gradient {
    background: linear-gradient(115.87deg, #9A61E0 39.31%, #5B58FF 100.75%);
    background-clip: border-box;
    background-clip: border-box;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .status-success {
    color: #3CC13B;
    background: rgba(60, 193, 59, 0.1);
    border-radius: 16px;
    border: 1px solid rgba(60, 193, 59, 0.3);
    text-transform: capitalize;
    padding: 3px 13px;
    font-size: 12px;
  }
  .status-success i {
    font-size: 12px !important;
  }

  .status-danger {
    color: #dc3545;
    background: rgba(220, 53, 69, 0.1);
    border-radius: 16px;
    border: 1px solid rgba(220, 53, 69, 0.3);
    text-transform: capitalize;
    padding: 3px 13px;
    font-size: 12px;
  }
  .status-danger i {
    font-size: 12px !important;
  }

  .status-warning {
    color: #F3BB1C;
    background: rgba(243, 187, 28, 0.1);
    border-radius: 16px;
    border: 1px solid rgba(243, 187, 28, 0.3);
    text-transform: capitalize;
    padding: 3px 13px;
    font-size: 12px;
  }
  .status-warning i {
    font-size: 12px !important;
  }

  .status-pending {
    color: #696CFF;
    background: rgba(105, 108, 255, 0.1);
    border-radius: 16px;
    border: 1px solid rgba(105, 108, 255, 0.3);
    text-transform: capitalize;
    padding: 3px 13px;
    font-size: 12px;
  }
  .status-pending i {
    font-size: 12px !important;
  }

  .status-blue {
    color: #11cdef;
    background: rgba(17, 205, 239, 0.1);
    border-radius: 16px;
    border: 1px solid rgba(17, 205, 239, 0.3);
    text-transform: capitalize;
    padding: 3px 13px;
    font-size: 12px;
  }
  .status-blue i {
    font-size: 12px !important;
  }

  .status-error {
    color: #F44336;
    background: rgba(244, 67, 54, 0.1);
    border-radius: 16px;
    text-transform: capitalize;
    padding: 3px 13px;
    font-size: 12px;
  }
  .status-error i {
    font-size: 12px !important;
  }

  .single-cat {
    -webkit-transition: 0.4s;
    transition: 0.4s;
    padding: 28px 25px 23px 25px;
    position: relative;
    z-index: 1;
    border-radius: 8px;
    -webkit-box-shadow: 0 0 30px rgba(3, 6, 150, 0.05);
            box-shadow: 0 0 30px rgba(3, 6, 150, 0.05);
    cursor: pointer;
  }
  .single-cat .cat-icon {
    margin: auto;
    max-width: 50px;
    max-height: 50px;
    margin-bottom: 13px;
  }
  .single-cat .cat-icon img {
    max-width: 100%;
    height: auto;
  }
  .single-cat .cat-cap .title {
    -webkit-transition: all 0.2s ease-out 0s;
    transition: all 0.2s ease-out 0s;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 7px;
    display: block;
    line-height: 1.5;
    -webkit-text-decoration: underline transparent;
            text-decoration: underline transparent;
    color: var(--primary-title);
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .single-cat .cat-cap .title {
      font-size: 21px;
    }
  }
  @media (max-width: 575px) {
    .single-cat .cat-cap .title {
      font-size: 21px;
    }
  }
  .single-cat .cat-cap .pera {
    font-size: 14px;
    -webkit-transition: all 0.2s ease-out 0s;
    transition: all 0.2s ease-out 0s;
    margin: 0;
  }
  .single-cat .cat-cap .browse-btn2 {
    opacity: 0;
    visibility: hidden;
  }
  .single-cat:hover {
    -webkit-transform: translateY(-3px);
            transform: translateY(-3px);
    -webkit-transition: 0.3s;
    transition: 0.3s;
  }
  .single-cat:hover .cat-cap .title {
    color: var(--primary-title);
  }
  .single-cat:hover .cat-cap .browse-btn2 {
    visibility: visible;
    opacity: 1;
  }

  /* 1. Theme default css */
  * {
    scrollbar-color: inherit inherit;
    scrollbar-width: thin;
  }

  * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    outline: none;
    -moz-osx-font-smoothing: grayscale;
    /* Firefox */
    -webkit-font-smoothing: antialiased;
    /* WebKit  */
  }

  html {
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    max-width: 100vw;
    overflow-x: hidden;
  }

  body {
    margin: 0;
    color: var(--primary-paragraph);
    font-family: var(--inter);
    overflow-x: hidden;
  }

  p {
    color: var(--primary-paragraph);
    font-family: var(--inter);
    -webkit-hyphens: auto;
    -ms-hyphens: auto;
    hyphens: auto;
    line-height: 1.6;
    margin-bottom: 0px;
    font-weight: 400;
  }

  svg {
    vertical-align: baseline;
  }

  .alert svg {
    width: 20px;
    height: 20px;
  }

  figure {
    margin: 0;
  }

  code {
    display: inline-block;
    color: var(--primary);
    text-transform: none;
    background: rgba(var(--primary-rgb), 0.08);
    padding: 4px 6px;
    font-size: 14px;
    border-radius: 4px;
    margin: 0 7px 9px;
    font-weight: 200;
    -webkit-box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
            box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
  }

  .custom-scrollbar::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px #f7f7fd;
  }
  .custom-scrollbar::-webkit-scrollbar {
    width: 6px;
  }
  .custom-scrollbar::-webkit-scrollbar-thumb {
    background-color: rgba(68, 102, 242, 0.15);
  }

  .dropdown-menu {
    border: 0;
    -webkit-box-shadow: 0 3px 12px rgba(45, 23, 191, 0.09);
            box-shadow: 0 3px 12px rgba(45, 23, 191, 0.09);
  }

  .dropdown-item:focus, .dropdown-item:hover {
    color: var(--primary);
    background-color: inherit;
  }

  .dropdown-item {
    font-weight: 500;
    color: var(--primary-paragraph);
  }

  .label-title {
    color: var(--primary-title);
    text-transform: capitalize;
    margin-bottom: 11px;
    font-size: 14px;
    font-weight: 500;
    display: block;
  }

  .paragraph-color-one {
    color: var(--primary-paragraph);
  }

  .paragraph-color-two {
    color: var(--secondary-paragraph);
  }

  .hide {
    display: none;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: var(--inter);
    color: var(--primary-title);
    margin-bottom: 0px;
    font-weight: 500;
  }

  h1 a,
  h2 a,
  h3 a,
  h4 a,
  h5 a,
  h6 a {
    color: inherit;
  }

  a,
  .button {
    -webkit-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
  }

  a:focus,
  .button:focus {
    text-decoration: none;
    outline: none;
  }

  a {
    color: var(--primary);
    text-decoration: none;
  }

  a:focus,
  a:active,
  a:hover {
    color: var(--primary);
  }

  .f-left {
    float: left;
  }

  .f-right {
    float: right;
  }

  .fix {
    overflow: hidden;
  }

  .clear {
    clear: both;
  }

  .opacity-0 {
    opacity: 0;
  }

  .shadow-0 {
    -webkit-box-shadow: none;
            box-shadow: none;
  }

  pre {
    margin-top: 15px;
    background-color: whitesmoke;
    background-size: 100%;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(50%, #f5f5f5), color-stop(50%, #e6e6e6));
    background-image: linear-gradient(#f5f5f5 50%, #e6e6e6 50%);
    background-size: 38px 38px;
    border: 1px solid #d4d4d4;
    display: block;
    line-height: 19px;
    margin-bottom: 20px;
    overflow: visible;
    overflow-y: hidden;
    padding: 0 0 0 4px;
    word-break: break-word;
  }

  a i {
    padding: 0 2px;
  }

  ol:not([class]) {
    margin-bottom: 20px;
  }

  ol:not([class]) ol {
    margin-bottom: 0px;
  }

  ul ol:not([class]) {
    margin-bottom: 0px;
  }

  dl,
  ol,
  ul {
    padding-left: 0px;
  }

  ol ol,
  ol ul,
  ul ol,
  ul ul {
    margin-top: 0px;
  }

  ul {
    margin: 0px;
    padding: 0px;
  }

  li {
    list-style: none;
  }

  hr {
    border-bottom: 1px solid #eeeeef;
    border-top: 0 none;
    margin: 30px 0;
    padding: 0;
  }

  input:focus::-moz-placeholder {
    opacity: 0;
    -webkit-transition: 0.4s;
    -moz-transition: 0.4s;
    transition: 0.4s;
  }

  textarea:focus::-moz-placeholder {
    opacity: 0;
    -webkit-transition: 0.4s;
    -moz-transition: 0.4s;
    transition: 0.4s;
  }

  /*input and button type focus outline disable*/
  input[type=text]:focus,
  input[type=email]:focus,
  input[type=url]:focus,
  input[type=password]:focus,
  input[type=search]:focus,
  input[type=tel]:focus,
  input[type=number]:focus,
  textarea:focus,
  input[type=button]:focus,
  input[type=reset]:focus,
  input[type=submit]:focus,
  select:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 1px solid #ddd;
  }

  #content[tabindex="-1"]:focus {
    outline: 0;
  }

  .h-100 {
    height: 100%;
  }

  embed,
  iframe,
  object {
    max-width: 100%;
  }

  .disabled {
    cursor: not-allowed;
    opacity: 0.5;
  }

  .footer-widget .table td,
  .footer-widget .table th {
    padding: 0.5rem !important;
  }

  .background-img {
    background-position: top center;
    background-size: cover;
    background-repeat: no-repeat;
  }

  /*-----------   Back To Top  --------*/
  @-webkit-keyframes border-transform {
    0%, 100% {
      border-radius: 63% 37% 54% 46%/55% 48% 52% 45%;
    }
    14% {
      border-radius: 40% 60% 54% 46%/49% 60% 40% 51%;
    }
    28% {
      border-radius: 54% 46% 38% 62%/49% 70% 30% 51%;
    }
    42% {
      border-radius: 61% 39% 55% 45%/61% 38% 62% 39%;
    }
    56% {
      border-radius: 61% 39% 67% 33%/70% 50% 50% 30%;
    }
    70% {
      border-radius: 50% 50% 34% 66%/56% 68% 32% 44%;
    }
    84% {
      border-radius: 46% 54% 50% 50%/35% 61% 39% 65%;
    }
  }
  .paginacontainer {
    height: 3000px;
  }

  .progressParent {
    position: fixed;
    right: 30px;
    bottom: 30px;
    height: 46px;
    width: 46px;
    cursor: pointer;
    display: block;
    border-radius: 50px;
    -webkit-box-shadow: inset 0 0 0 2px #d0d0d4;
            box-shadow: inset 0 0 0 2px #d0d0d4;
    z-index: 10000;
    opacity: 0;
    visibility: hidden;
    -webkit-transform: translateY(15px);
            transform: translateY(15px);
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
  }
  .progressParent.rn-backto-top-active {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  .progressParent::after {
    position: absolute;
    font-family: "Line Awesome Free" !important;
    content: "\f062";
    text-align: center;
    line-height: 46px;
    font-size: 20px;
    color: #2c3941;
    left: 0;
    top: 0;
    height: 46px;
    width: 46px;
    cursor: pointer;
    display: block;
    z-index: 2;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    font-weight: 900;
  }
  .progressParent:hover::after {
    color: var(--primary-title);
  }
  .progressParent:hover::before {
    opacity: 1;
  }
  .progressParent svg path {
    fill: none;
  }
  .progressParent svg.backCircle path {
    stroke: var(--primary-title);
    stroke-width: 4;
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
  }

  /*--- SHANE Mouse Cursor   ----*/
  .mouseCursor {
    position: fixed;
    left: 0;
    top: 0;
    pointer-events: none;
    border-radius: 50%;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    visibility: hidden;
  }

  .cursorInner {
    margin-left: -3px;
    margin-top: -3px;
    width: 6px;
    height: 6px;
    z-index: 10000001;
    background-color: var(--primary);
    -webkit-transition: width 0.3s ease-in-out, height 0.3s ease-in-out, margin 0.3s ease-in-out, opacity 0.3s ease-in-out;
    transition: width 0.3s ease-in-out, height 0.3s ease-in-out, margin 0.3s ease-in-out, opacity 0.3s ease-in-out;
  }

  .cursorInner.cursor-hover {
    margin-left: -30px;
    margin-top: -30px;
    width: 60px;
    height: 60px;
    background-color: var(--primary);
    opacity: 0.1;
  }

  .cursorOuter {
    margin-left: -15px;
    margin-top: -15px;
    width: 30px;
    height: 30px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    z-index: 10000000;
    opacity: 0.5;
    -webkit-transition: all 0.08s ease-out;
    transition: all 0.08s ease-out;
  }

  .cursorOuter.cursor-hover {
    opacity: 0;
  }

  .main-wrapper[data-magic-cursor=hide] .mouseCursor {
    display: none;
    opacity: 0;
    visibility: hidden;
    position: absolute;
    z-index: -1111;
  }

  .inner-section-padding {
    padding-top: 80px;
    padding-bottom: 56px;
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .inner-section-padding {
      padding-top: 80px;
      padding-bottom: 56px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .inner-section-padding {
      padding-top: 80px;
      padding-bottom: 56px;
    }
  }
  @media (max-width: 575px) {
    .inner-section-padding {
      padding-top: 115px;
      padding-bottom: 56px;
    }
  }

  .inner-section-padding2 {
    padding-top: 80px;
    padding-bottom: 80px;
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .inner-section-padding2 {
      padding-top: 80px;
      padding-bottom: 80px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .inner-section-padding2 {
      padding-top: 80px;
      padding-bottom: 80px;
    }
  }
  @media (max-width: 575px) {
    .inner-section-padding2 {
      padding-top: 115px;
      padding-bottom: 80px;
    }
  }

  /*-- Section Padding -- */
  .section-padding {
    padding-top: 100px;
    padding-bottom: 100px;
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .section-padding {
      padding-top: 70px;
      padding-bottom: 70px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .section-padding {
      padding-top: 70px;
      padding-bottom: 70px;
    }
  }
  @media (max-width: 575px) {
    .section-padding {
      padding-top: 70px;
      padding-bottom: 70px;
    }
  }

  .section-padding2 {
    padding-top: 100px;
    padding-bottom: 100px;
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .section-padding2 {
      padding-top: 70px;
      padding-bottom: 70px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .section-padding2 {
      padding-top: 70px;
      padding-bottom: 70px;
    }
  }
  @media (max-width: 575px) {
    .section-padding2 {
      padding-top: 70px;
      padding-bottom: 70px;
    }
  }

  .top-padding {
    padding-top: 100px;
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .top-padding {
      padding-top: 70px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .top-padding {
      padding-top: 70px;
    }
  }
  @media (max-width: 575px) {
    .top-padding {
      padding-top: 70px;
    }
  }

  .top-padding2 {
    padding-top: 95px;
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .top-padding2 {
      padding-top: 70px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .top-padding2 {
      padding-top: 70px;
    }
  }
  @media (max-width: 575px) {
    .top-padding2 {
      padding-top: 70px;
    }
  }

  .bottom-padding {
    padding-bottom: 75px;
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .bottom-padding {
      padding-bottom: 45px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .bottom-padding {
      padding-bottom: 45px;
    }
  }
  @media (max-width: 575px) {
    .bottom-padding {
      padding-bottom: 45px;
    }
  }

  .bottom-padding2 {
    padding-bottom: 100px;
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .bottom-padding2 {
      padding-bottom: 45px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .bottom-padding2 {
      padding-bottom: 45px;
    }
  }
  @media (max-width: 575px) {
    .bottom-padding2 {
      padding-bottom: 45px;
    }
  }

  .footer-padding {
    padding-top: 100px;
    padding-bottom: 50px;
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .footer-padding {
      padding-top: 100px;
      padding-bottom: 20px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .footer-padding {
      padding-top: 80px;
      padding-bottom: 20px;
    }
  }
  @media (max-width: 575px) {
    .footer-padding {
      padding-top: 80px;
      padding-bottom: 0px;
    }
  }

  .footer-padding2 {
    padding-top: 315px;
    padding-bottom: 50px;
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .footer-padding2 {
      padding-top: 100px;
      padding-bottom: 20px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .footer-padding2 {
      padding-top: 80px;
      padding-bottom: 20px;
    }
  }
  @media (max-width: 575px) {
    .footer-padding2 {
      padding-top: 80px;
      padding-bottom: 0px;
    }
  }

  @media (max-width: 991px) {
    .section-tittle-one {
      margin-bottom: 40px;
    }
  }
  .section-tittle-one .cap {
    font-size: 16px;
    margin-bottom: 10px;
    display: inline-block;
  }
  .section-tittle-one .title {
    color: var(--primary-title);
    font-family: var(--gabriela);
    text-transform: capitalize;
    font-size: 34px;
    display: block;
    font-weight: 600;
    line-height: 1.4;
    margin-bottom: 16px;
    position: relative;
    z-index: 0;
  }
  @media (max-width: 575px) {
    .section-tittle-one .title {
      font-size: 27px !important;
    }
  }
  .section-tittle-one .title.tittleBg {
    position: relative;
  }
  .section-tittle-one .title.tittleBg::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 8px;
    background: var(--primary);
    bottom: 10px;
    z-index: -1;
    border-radius: 16px;
  }
  .section-tittle-one .title.title-border {
    position: relative;
  }
  .section-tittle-one .title.title-border::before {
    position: absolute;
    content: "";
    width: 140px;
    height: 2px;
    background: #CCD1E5;
    left: 0;
    bottom: 0px;
    z-index: 2;
  }
  .section-tittle-one .title .title-border2 {
    position: relative;
  }
  .section-tittle-one .title .title-border2::before {
    position: absolute;
    content: "";
    width: 100%;
    height: 2px;
    background: #CCD1E5;
    left: 0;
    bottom: -8px;
    z-index: 2;
  }
  .section-tittle-one .title .textColor {
    color: var(--primary);
  }
  .section-tittle-one .title .lineBrack {
    display: block;
  }
  @media (max-width: 575px) {
    .section-tittle-one .title .lineBrack {
      display: none;
    }
  }
  .section-tittle-one .title .color {
    color: var(--primary);
  }
  .section-tittle-one .titleBg2 {
    position: absolute;
    width: 85px;
    height: 52px;
    background: var(--section-bg-one);
    z-index: -1;
    left: -16px;
    top: -3px;
    margin: 0;
    line-height: 1;
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .section-tittle-one .titleBg2 {
      height: 45px;
    }
  }
  @media (max-width: 575px) {
    .section-tittle-one .titleBg2 {
      width: 57px;
      height: 34px;
    }
  }
  .section-tittle-one .left-line {
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 17px;
    text-transform: uppercase;
    color: var(--primary);
    display: inline-block;
    position: relative;
    padding-left: 68px;
  }
  .section-tittle-one .left-line::before {
    position: absolute;
    content: "";
    width: 54px;
    height: 2px;
    background: var(--primary);
    top: 0;
    left: 0px;
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
  }
  .section-tittle-one .border-style1 {
    color: #282828;
    font-size: 18px;
    font-weight: 500;
    display: inline-block;
    margin-bottom: 40px;
    position: relative;
    line-height: 1;
    text-transform: capitalize;
  }
  .section-tittle-one .border-style1:before {
    background: var(--primary-title);
    position: absolute;
    content: "";
    width: 67px;
    height: 2px;
    bottom: -25px;
    left: -20px;
    text-align: center;
    margin: 0 auto;
    right: 0;
  }
  .section-tittle-one .border-style1::after {
    background: var(--primary);
    position: absolute;
    content: "";
    width: 18px;
    height: 2px;
    bottom: -25px;
    left: 75px;
    margin: 0 auto;
    text-align: center;
    right: 0;
  }
  .section-tittle-one .transform-text {
    color: var(--primary);
    font-size: 14px;
    font-weight: 400;
    text-transform: uppercase;
    display: inline-block;
    letter-spacing: 0.3em;
    -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
    position: absolute;
    left: -36px;
    top: 35px;
  }
  .section-tittle-one .title-info {
    font-size: 18px;
    font-weight: 500;
    display: inline-block;
    margin-bottom: 24px;
    position: relative;
    line-height: 1;
    color: var(--primary-title);
  }
  .section-tittle-one .title-info::before {
    position: absolute;
    content: "";
    width: 50px;
    height: 2px;
    background: #ff5e14;
    bottom: 0;
    left: -66px;
  }
  .section-tittle-one .title-info::after {
    position: absolute;
    content: "";
    width: 50px;
    height: 2px;
    background: #ff5e14;
    bottom: 0;
    right: -66px;
  }
  .section-tittle-one .left-border {
    color: #252525;
    font-size: 15px;
    font-weight: 400;
    line-height: 1.5;
    border-left: 4px solid var(--primary);
    padding-left: 22px;
  }
  .section-tittle-one .pera {
    color: var(--secondary-title);
    font-size: 16px;
    font-weight: 400;
    line-height: 1.5;
    margin-bottom: 20px;
    text-transform: capitalize;
  }
  .section-tittle-one .pera a {
    text-decoration: underline;
  }

  .section-tittle-two {
    position: relative;
  }
  .section-tittle-two .front-text {
    position: relative;
    z-index: 2;
  }
  .section-tittle-two .front-text .title {
    color: var(--primary-title);
    font-size: 55px;
    font-weight: 700;
    line-height: 1.2;
    text-transform: uppercase;
  }
  @media (max-width: 575px) {
    .section-tittle-two .front-text .title {
      font-size: 26px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .section-tittle-two .front-text .title {
      font-size: 40px;
    }
  }
  .section-tittle-two span.back-text {
    font-size: 108px;
    font-weight: 800;
    text-transform: uppercase;
    -webkit-text-stroke: 1px #f6f7f8;
    -webkit-text-fill-color: transparent;
    margin: 0;
    line-height: 1;
    position: absolute;
    -webkit-transform: translateY(-104%);
            transform: translateY(-104%);
    right: 0;
    left: 0;
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .section-tittle-two span.back-text {
      font-size: 80px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .section-tittle-two span.back-text {
      font-size: 50px;
      -webkit-transform: translateY(-136%);
              transform: translateY(-136%);
    }
  }
  @media (max-width: 575px) {
    .section-tittle-two span.back-text {
      font-size: 30px;
      -webkit-transform: translateY(-136%);
              transform: translateY(-136%);
    }
  }

  .section-tittle-three .title {
    text-transform: capitalize;
    font-size: 16px;
    color: var(--heading-color-tow);
    display: block;
    font-weight: 600;
    line-height: 1.3;
    margin-bottom: 10px;
    display: inline-block;
  }

  @media (max-width: 575px) {
    .section-tittle-pro {
      margin-bottom: 40px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .section-tittle-pro {
      margin-bottom: 40px;
    }
  }
  .section-tittle-pro .tittle {
    color: var(--primary-title);
    font-family: var(--gabriela);
    text-transform: capitalize;
    font-size: 34px;
    display: block;
    font-weight: 600;
    line-height: 1.3;
    margin-bottom: 18px;
    display: inline-block;
    position: relative;
    z-index: 0;
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .section-tittle-pro .tittle {
      font-size: 36px !important;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .section-tittle-pro .tittle {
      font-size: 31px !important;
    }
  }
  @media (max-width: 575px) {
    .section-tittle-pro .tittle {
      font-size: 24px !important;
    }
  }
  .section-tittle-pro .tittle .textColor {
    color: var(--primary);
  }
  .section-tittle-pro .tittle .lineBrack {
    display: block;
  }
  @media (max-width: 575px) {
    .section-tittle-pro .tittle .lineBrack {
      display: none;
    }
  }
  .section-tittle-pro .tittle .color {
    color: var(--primary);
  }
  .section-tittle-pro .pera {
    color: #5E5E5E;
    font-size: 16px;
    font-weight: 400;
    line-height: 1.5;
  }
  .section-tittle-pro .pera a {
    text-decoration: underline;
  }
  .section-tittle-pro.section-tittle2 .tittle {
    text-transform: capitalize;
    font-size: 30px;
    line-height: 1.4;
  }
  .section-tittle-pro.section-tittle3 h2 {
    font-size: 46px;
    line-height: 1.3;
  }
  .section-tittle-pro.section-tittle4 h2 {
    color: var(--primary-title);
    font-size: 30px;
    margin-bottom: 30px;
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .section-tittle-pro.section-tittle4 h2 {
      font-size: 28px;
    }
  }
  @media (max-width: 575px) {
    .section-tittle-pro.section-tittle4 h2 {
      font-size: 23px;
      line-height: 1.5;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .section-tittle-pro.section-tittle4 h2 br {
      display: none;
    }
  }
  @media (max-width: 575px) {
    .section-tittle-pro.section-tittle4 h2 br {
      display: none;
    }
  }
  .section-tittle-pro.section-tittle5 span {
    color: var(--primary);
  }
  .section-tittle-pro.section-tittle6 .tittle {
    font-size: 64px;
    line-height: 1.1;
  }

  @media (max-width: 575px) {
    .section-tittle-four {
      margin-bottom: 40px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .section-tittle-four {
      margin-bottom: 40px;
    }
  }
  .section-tittle-four .title {
    color: var(--primary-title);
    font-family: var(--inter);
    font-size: 34px;
    display: block;
    line-height: 1.3;
    margin-bottom: 18px;
    display: inline-block;
    position: relative;
    z-index: 0;
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .section-tittle-four .title {
      font-size: 36px !important;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .section-tittle-four .title {
      font-size: 31px !important;
    }
  }
  @media (max-width: 575px) {
    .section-tittle-four .title {
      font-size: 24px !important;
    }
  }
  .section-tittle-four .title::after {
    position: absolute;
    content: "";
    background-image: url(../images/icon/support-ticketing-tittleShape2.svg);
    background-repeat: no-repeat;
    width: 28px;
    height: 100%;
    top: -15px;
    left: -28px;
    background-position: 0 0;
    background-size: contain;
  }
  @media (max-width: 575px) {
    .section-tittle-four .title::after {
      left: -3px;
      width: 15px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .section-tittle-four .title::after {
      width: 23px;
      left: -16px;
    }
  }
  .section-tittle-four .title::before {
    position: absolute;
    content: "";
    background-image: url(../images/icon/support-ticketing-tittleShape.svg);
    background-repeat: no-repeat;
    width: 32px;
    height: 100%;
    top: -7px;
    right: -55px;
    background-position: 0 0;
    background-size: contain;
  }
  @media (max-width: 575px) {
    .section-tittle-four .title::before {
      width: 19px;
      right: -15px;
    }
  }
  .section-tittle-four .title .tittleBg {
    position: relative;
  }
  .section-tittle-four .title .tittleBg::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 8px;
    background: var(--tertiary);
    bottom: 10px;
    z-index: -1;
    border-radius: 16px;
  }
  .section-tittle-four .title .shape {
    position: absolute;
    width: 72px;
    height: 50px;
    background: var(--main-color-three);
    z-index: -1;
    left: 0;
    top: 0;
    margin: 0;
    line-height: 1;
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .section-tittle-four .title .shape {
      height: 45px;
    }
  }
  @media (max-width: 575px) {
    .section-tittle-four .title .shape {
      width: 57px;
      height: 34px;
    }
  }
  .section-tittle-four .title .textColor {
    color: var(--primary);
  }
  .section-tittle-four .title .lineBrack {
    display: block;
  }
  @media (max-width: 575px) {
    .section-tittle-four .title .lineBrack {
      display: none;
    }
  }
  .section-tittle-four .title .color {
    color: var(--primary);
  }
  .section-tittle-four .pera {
    color: var(--primary-title);
    font-size: 18px;
    font-weight: 400;
    line-height: 1.5;
    margin-bottom: 20px;
  }
  .section-tittle-four .pera a {
    text-decoration: underline;
  }

  .circle {
    position: relative;
  }
  .circle::before {
    content: "";
    border: 4px solid #FFB562;
    position: absolute;
    left: -16px;
    bottom: 14px;
    width: 117%;
    height: 77%;
    border-radius: 50%;
    z-index: -1;
  }
  @media (max-width: 991px) {
    .circle::before {
      display: none;
    }
  }
  .circle::after {
    content: "";
    border: 4px solid #FFB562;
    position: absolute;
    left: -16px;
    bottom: 6px;
    width: 117%;
    height: 78%;
    border-radius: 50%;
    z-index: -1;
  }
  @media (max-width: 991px) {
    .circle::after {
      display: none;
    }
  }

  .circle2 {
    position: relative;
  }
  .circle2::before {
    content: "";
    border: 2px solid #FFB562;
    position: absolute;
    left: -9px;
    bottom: -4px;
    width: 108%;
    height: 122%;
    border-radius: 50%;
    z-index: -1;
  }
  @media (max-width: 575px) {
    .circle2::before {
      display: none;
    }
  }
  .circle2::after {
    content: "";
    border: 2px solid #FFB562;
    position: absolute;
    left: -11px;
    bottom: 2px;
    width: 110%;
    height: 105%;
    border-radius: 50%;
    z-index: -1;
  }
  @media (max-width: 575px) {
    .circle2::after {
      display: none;
    }
  }

  .tittleBgOne {
    position: relative;
    color: #ffffff;
    z-index: 1;
  }
  .tittleBgOne::before {
    -webkit-transition: all 0.4s ease-out 0s;
    transition: all 0.4s ease-out 0s;
    background: var(--primary);
    content: "";
    position: absolute;
    top: 3px;
    left: -4px;
    height: calc(84% + 5px);
    width: calc(96% + 20px);
    z-index: -1;
    border-radius: 5px;
  }
  @media (max-width: 991px) {
    .tittleBgOne::before {
      top: 2px;
    }
  }
  @media (max-width: 575px) {
    .tittleBgOne::before {
      left: -5px;
      height: calc(82% + 5px);
      width: calc(88% + 20px);
    }
  }
  .tittleBgOne:hover {
    background-position: 0% 50%;
  }

  .subCatTitle {
    font-family: var(--inter);
    color: var(--primary-title);
    font-size: 16px;
    display: block;
    font-weight: 500;
    line-height: 1.4;
    margin-bottom: 15px;
  }

  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .small-tittle {
      margin-bottom: 20px;
    }
  }
  @media (max-width: 575px) {
    .small-tittle {
      margin-bottom: 20px;
    }
  }
  .small-tittle .tittle {
    font-family: var(--inter);
    color: var(--primary-title);
    font-size: 20px;
    display: block;
    font-weight: 700;
    line-height: 1.4;
    margin-bottom: 0px;
  }
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .small-tittle .tittle {
      font-size: 25px;
    }
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .small-tittle .tittle {
      font-size: 24px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .small-tittle .tittle {
      font-size: 22px;
    }
  }
  @media (max-width: 575px) {
    .small-tittle .tittle {
      font-size: 20px;
    }
  }
  .small-tittle .lineStyleOne {
    padding-left: 15px;
    border-left: 3px solid var(--primary);
  }
  .small-tittle .pear {
    font-size: 15px;
    font-weight: 400;
    line-height: 1.5;
  }
  .small-tittle .pear a {
    text-decoration: underline;
  }
  .small-tittle.small-tittle2 .tittle {
    color: var(--primary-title);
    font-size: 20px;
    font-weight: 700;
  }
  .small-tittle.small-tittle2 .pera {
    color: #66816A;
  }

  .tittleStyleTow h3 {
    color: var(--primary-title);
    font-size: 20px;
    display: block;
    font-weight: 700;
    line-height: 1.4;
    margin-bottom: 16px;
    border-bottom: 1px solid var(--primary-border);
    padding-bottom: 4px;
    position: relative;
  }
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .tittleStyleTow h3 {
      font-size: 20px;
    }
  }
  .tittleStyleTow h3 span {
    width: 20px;
    height: 1px;
    background: var(--primary);
    display: inline-block;
    position: absolute;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    top: 50%;
    margin-left: 10px;
  }
  .tittleStyleTow p {
    font-size: 15px;
    font-weight: 400;
    line-height: 1.5;
  }
  .tittleStyleTow p a {
    text-decoration: underline;
  }

  .infoTitle2 {
    color: #667085;
    margin-bottom: 20px;
    font-size: 16px;
    display: block;
  }
  .infoTitle2 .icon {
    margin-right: 8px;
    font-size: 22px;
    position: relative;
    top: 3px;
  }

  .infoTitle {
    font-family: var(--inter);
    color: var(--primary-title);
    margin-bottom: 11px;
    font-size: 16px;
    font-weight: 500;
    display: block;
  }

  .catTittle {
    font-family: var(--inter);
    color: var(--primary-title);
    margin-bottom: 10px;
    font-size: 17px;
    font-weight: 500;
  }

  .plr {
    padding-left: 100px;
    padding-right: 100px;
  }
  @media only screen and (min-width: 1600px) and (max-width: 1799px) {
    .plr {
      padding-left: 35px;
      padding-right: 35px;
    }
  }
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .plr {
      padding-left: 0px;
      padding-right: 0px;
    }
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .plr {
      padding-left: 0px;
      padding-right: 0px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .plr {
      padding-left: 0px;
      padding-right: 0px;
    }
  }
  @media (max-width: 575px) {
    .plr {
      padding-left: 0px;
      padding-right: 0px;
    }
  }

  .sectionImg-bg {
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
  }

  .sectionImg-bg2 {
    background-size: 100% 100%;
    background-repeat: no-repeat !important;
    background-position: center center;
  }

  .simplePresentCart-one {
    padding: 30px 24px 2px 24px;
    border-radius: 16px;
  }

  .simplePresentCart-two {
    padding: 30px 30px;
    border-radius: 16px;
    -webkit-box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;
            box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;
  }
  @media (max-width: 575px) {
    .simplePresentCart-two {
      padding: 20px 20px;
    }
  }

  .border-cart {
    padding: 25px 22px;
    border: 1px solid var(--primary-border);
    border-radius: 8px;
  }
  @media (max-width: 575px) {
    .border-cart {
      padding: 25px 10px;
    }
  }

  .priceTittle {
    -webkit-transition: all 0.4s ease-out 0s;
    transition: all 0.4s ease-out 0s;
    font-family: var(--inter);
    color: var(--primary-title);
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 20px;
  }
  @media (max-width: 575px) {
    .priceTittle {
      font-size: 18px;
    }
  }

  .simplePresentCart2 {
    padding: 30px 30px;
    border: 1px solid var(--primary-border);
    padding-bottom: 10px;
  }

  .simplePresentCart3 {
    padding: 40px 40px 40px 40px;
    -webkit-box-shadow: 0 3px 10px rgba(27, 30, 120, 0.1);
            box-shadow: 0 3px 10px rgba(27, 30, 120, 0.1);
    border: 1px solid var(--primary-border);
    border-radius: 8px;
  }
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .simplePresentCart3 {
      padding: 30px 19px 30px 16px;
    }
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .simplePresentCart3 {
      padding: 30px 19px 30px 16px;
    }
  }

  /* Sticky*/
  .sticky-bar {
    left: 0;
    margin: auto;
    position: fixed;
    top: 0;
    width: 100%;
    -webkit-box-shadow: 0 10px 15px rgba(25, 25, 25, 0.1);
    box-shadow: 0 10px 15px rgba(25, 25, 25, 0.1);
    z-index: 9999;
    -webkit-animation: 300ms ease-in-out 0s normal none 1 running fadeInDown;
    animation: 300ms ease-in-out 0s normal none 1 running fadeInDown;
    -webkit-box-shadow: 0 10px 15px rgba(25, 25, 25, 0.1);
  }

  /* Sticky end */
  .sectionBgHalf {
    position: relative;
  }
  .sectionBgHalf::before {
    position: absolute;
    content: "";
    background: var(--section-bg-one);
    width: 100%;
    height: 54%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }

  .lineBreak {
    display: block;
  }
  @media (max-width: 1199px) {
    .lineBreak {
      display: inline-block;
    }
  }

  .positioningSection {
    position: relative;
    margin-bottom: -225px;
  }

  .sectionImg-bg {
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
  }

  .sectionImg-bg2 {
    background-size: 100% 100%;
    background-repeat: no-repeat !important;
    background-position: center center;
  }

  input[type=number] {
    -webkit-appearance: none;
    margin: 0;
    -moz-appearance: textfield;
  }

  * {
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    margin: 0;
  }

  .loading-page {
    background: #0d0d0d;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
        justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 999999;
    -webkit-transition: 0.6s;
    transition: 0.6s;
    margin: 0 auto;
  }
  .loading-page .counter {
    text-align: center;
    position: relative;
    width: 200px;
  }
  .loading-page .counter .text {
    font-size: 40px;
    font-weight: 100;
    color: #f60d54;
  }
  .loading-page .counter .number {
    color: white;
    font-size: 60px;
    margin-top: -10px;
  }
  .loading-page .counter .number.abs {
    position: absolute;
    top: 0;
    width: 100%;
  }
  .loading-page .counter .line {
    display: block;
    border: 2px solid red;
    width: 0;
  }

  .overlayOne {
    position: relative;
    z-index: 0;
  }
  .overlayOne::before {
    position: absolute;
    content: "";
    background-color: rgba(var(--heading-color), 0.6);
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    z-index: 0;
    background-repeat: no-repeat;
  }

  .overlayTwo {
    position: relative;
    z-index: 0;
  }
  .overlayTwo::before {
    position: absolute;
    content: "";
    background-color: rgba(var(--primary), 0.6);
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    z-index: 0;
    background-repeat: no-repeat;
  }

  .nicescroll-cursors {
    background-color: rgb(206, 206, 206) !important;
    background-color: rgba(var(--primary-rgb), 0.3) !important;
    border: 0 !important;
    width: 2px !important;
  }

  .flex {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
  }

  .border-top {
    border-top: 1px solid var(--secondary-border);
  }

  .border-bottom {
    border-top: 1px solid var(--secondary-border);
  }

  .border-right {
    border-top: 1px solid var(--secondary-border);
  }

  .border-left {
    border-top: 1px solid var(--secondary-border);
  }

  .img-cover {
    width: 100%;
    height: 100%;
    overflow: hidden;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: 50% 50%;
    object-position: 50% 50%;
  }

  .h-full {
    height: calc(100% - 24px);
  }

  .h-calc {
    height: 100%;
  }

  .img-bg {
    position: relative;
  }
  .img-bg::before {
    content: "";
    background: url(../images/team/dot_bg.png);
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    z-index: -1;
  }

  .img-bg2 {
    position: relative;
  }
  .img-bg2::before {
    content: "";
    background: url(../images/pattern2.jpg);
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    z-index: -1;
  }

  .mlr-100 {
    margin: 0 100px;
  }
  @media only screen and (min-width: 1200px) and (max-width: 1399px) {
    .mlr-100 {
      margin: 0 0px;
    }
  }
  @media only screen and (min-width: 1400px) and (max-width: 1599px) {
    .mlr-100 {
      margin: 0 0px;
    }
  }
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .mlr-100 {
      margin: 0 30px;
    }
  }
  @media (max-width: 575px) {
    .mlr-100 {
      margin: 0 0px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .mlr-100 {
      margin: 0 0px;
    }
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .mlr-100 {
      margin: 0 0px;
    }
  }

  .custom-dropdown button {
    background: none;
    padding: 0;
    border: 0;
    font-size: 40px;
    color: var(--primary-paragraph);
    line-height: 1;
  }
  .custom-dropdown button::after {
    display: none;
  }
  .custom-dropdown .dropdown-item {
    padding: 10px 15px;
  }

  .custom-card {
    padding: 24px 24px 24px 24px;
    border-radius: 12px;
    border: 1px solid var(--secondary-border);
  }

  .line-clamp-1 {
    display: -webkit-box;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 1;
  }

  .line-clamp-2 {
    display: -webkit-box;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
  }

  .line-clamp-3 {
    display: -webkit-box;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
  }

  /* Preview img */
  .single-preview a {
    position: relative;
    display: block;
    text-align: center;
    height: 500px;
    -webkit-transition: background-position 8s ease-in-out;
    transition: background-position 8s ease-in-out;
    background-size: contain;
    width: 100%;
    background-position: center;
    background-size: 100% 100%;
  }
  @media (max-width: 575px) {
    .single-preview a {
      height: 350px;
    }
  }
  .single-preview a:hover {
    background-position: 0px 100%;
  }
  .single-preview a:hover::before {
    background: rgba(173, 170, 169, 0.3);
  }
  .single-preview a:hover::after {
    opacity: 1;
  }

  #receipt .single-preview a {
    height: 755px;
  }

  .stickyStye {
    -webkit-clip-path: polygon(100% 0%, 90.6% 52.17%, 100% 100%, 0px 100%, -0.49% 47%, 0px 0px);
            clip-path: polygon(100% 0%, 90.6% 52.17%, 100% 100%, 0px 100%, -0.49% 47%, 0px 0px);
    color: #ffffff;
    background: var(--primary-title);
    text-transform: capitalize;
    font-size: 16px;
    font-weight: 500;
    padding: 6px 54px 5px 18px;
    margin-bottom: 0;
    display: inline-block;
    text-align: center;
    padding-right: 34px;
  }

  /* Modern  */
  .preview-image-1 {
    background: url("../images/demo/modern1.png") 0 0 no-repeat;
  }

  .preview-image-2 {
    background: url("../images/demo/modern2.png") 0 0 no-repeat;
  }

  .preview-image-3 {
    background: url("../images/demo/modern3.png") 0 0 no-repeat;
  }

  .preview-image-20 {
    background: url("../images/demo/receipt1.png") 0 0 no-repeat;
  }

  .preview-image-21 {
    background: url("../images/demo/receipt2.png") 0 0 no-repeat;
  }

  .preview-image-22 {
    background: url("../images/demo/receipt3.png") 0 0 no-repeat;
  }

  .preview-image-23 {
    background: url("../images/demo/receipt4.png") 0 0 no-repeat;
  }

  .btn-primary-fill {
    padding: 10px 25px;
    color: #fff;
    text-transform: capitalize;
    border: 1px solid transparent;
    font-size: 16px;
    font-weight: 500;
    border-radius: 6px;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    background: var(--primary-btn);
  }
  .btn-primary-fill:hover {
    background: none;
    border: 1px solid var(--primary-btn);
    color: var(--primary-btn);
  }
  .btn-primary-fill:hover i {
    left: 3px;
  }
  .btn-primary-fill i {
    font-size: 18px;
    -webkit-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
    position: relative;
    left: 0;
    line-height: 1;
    top: 4px;
  }
  .btn-primary-fill:focus {
    border-color: var(--primary-btn);
    background: var(--primary-btn);
    color: #fff !important;
  }
  .btn-primary-fill:focus:active {
    border-color: var(--primary-btn);
    background: var(--primary-btn);
    color: #fff;
  }

  .btn-secondary-fill {
    padding: 10px 25px;
    color: #fff;
    text-transform: capitalize;
    border: 1px solid transparent;
    font-size: 16px;
    font-weight: 500;
    border-radius: 6px;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    background: var(--secondary-btn);
  }
  .btn-secondary-fill:hover {
    background: none;
    border: 1px solid var(--secondary-btn);
    color: var(--secondary-btn);
  }
  .btn-secondary-fill:hover i {
    left: 3px;
  }
  .btn-secondary-fill i {
    font-size: 18px;
    -webkit-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
    position: relative;
    left: 0;
    line-height: 1;
    top: 4px;
  }
  .btn-secondary-fill:focus {
    border-color: var(--secondary-btn);
    background: var(--secondary-btn);
    color: #fff !important;
  }
  .btn-secondary-fill:focus:active {
    border-color: var(--secondary-btn);
    background: var(--secondary-btn);
    color: #fff;
  }

  .btn-tertiary-fill {
    padding: 10px 25px;
    color: #fff;
    text-transform: capitalize;
    border: 1px solid transparent;
    font-size: 16px;
    font-weight: 500;
    border-radius: 6px;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    background: var(--tertiary-btn);
  }
  .btn-tertiary-fill:hover {
    background: none;
    border: 1px solid var(--tertiary-btn);
    color: var(--tertiary-btn);
  }
  .btn-tertiary-fill:hover i {
    left: 3px;
  }
  .btn-tertiary-fill i {
    font-size: 18px;
    -webkit-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
    position: relative;
    left: 0;
    line-height: 1;
    top: 4px;
  }
  .btn-tertiary-fill:focus {
    border-color: var(--tertiary-btn);
    background: var(--tertiary-btn);
    color: #fff !important;
  }
  .btn-tertiary-fill:focus:active {
    border-color: var(--tertiary-btn);
    background: var(--tertiary-btn);
    color: #fff;
  }

  .btn-light-fill {
    padding: 10px 25px;
    color: #fff;
    text-transform: capitalize;
    border: 1px solid transparent;
    font-size: 16px;
    font-weight: 500;
    border-radius: 6px;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    color: var(--dark);
  }
  .btn-light-fill:hover {
    background: none;
  }
  .btn-light-fill:hover i {
    left: 3px;
  }
  .btn-light-fill i {
    font-size: 18px;
    -webkit-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
    position: relative;
    left: 0;
    line-height: 1;
    top: 4px;
  }
  .btn-light-fill:focus {
    border-color: #e6edef;
    background: #e6edef;
    color: var(--dark);
  }
  .btn-light-fill:focus:active {
    border-color: #e6edef;
    background: #e6edef;
    color: var(--dark);
  }

  .btn-dark-fill {
    padding: 10px 25px;
    color: #fff;
    text-transform: capitalize;
    border: 1px solid transparent;
    font-size: 16px;
    font-weight: 500;
    border-radius: 6px;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-transition: 0.3s;
    transition: 0.3s;
  }
  .btn-dark-fill:hover {
    background: none;
  }
  .btn-dark-fill:hover i {
    left: 3px;
  }
  .btn-dark-fill i {
    font-size: 18px;
    -webkit-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
    position: relative;
    left: 0;
    line-height: 1;
    top: 4px;
  }
  .btn-dark-fill:focus {
    border-color: var(--dark);
    background: var(--dark);
    color: #fff !important;
  }
  .btn-dark-fill:focus:active {
    border-color: var(--dark);
    background: var(--dark);
    color: #fff;
  }

  .btn-warning-fill {
    padding: 10px 25px;
    color: #fff;
    text-transform: capitalize;
    border: 1px solid transparent;
    font-size: 16px;
    font-weight: 500;
    border-radius: 6px;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-transition: 0.3s;
    transition: 0.3s;
  }
  .btn-warning-fill:hover {
    background: none;
  }
  .btn-warning-fill:hover i {
    left: 3px;
  }
  .btn-warning-fill i {
    font-size: 18px;
    -webkit-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
    position: relative;
    left: 0;
    line-height: 1;
    top: 4px;
  }
  .btn-warning-fill:focus {
    border-color: var(--warning);
    background: var(--warning);
    color: #fff !important;
  }
  .btn-warning-fill:focus:active {
    border-color: var(--warning);
    background: var(--warning);
    color: #fff;
  }

  .btn-primary-outline {
    padding: 10px 25px;
    border: 1px solid transparent;
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    border-radius: 6px;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    background: none;
    color: var(--primary-btn);
    border: 1px solid var(--primary-btn);
  }
  .btn-primary-outline:hover {
    color: var(--white);
    border: 1px solid var(--primary-btn);
    background: var(--primary-btn);
  }
  .btn-primary-outline i {
    font-size: 21px;
    line-height: 1;
    position: relative;
    top: 4px;
  }
  .btn-primary-outline:focus {
    border-color: var(--primary-btn);
    background: var(--primary-btn);
    color: var(--white);
  }
  .btn-primary-outline:focus:active {
    border-color: var(--primary-btn);
    background: var(--primary-btn);
    color: var(--white);
  }

  .btn-secondary-outline {
    padding: 10px 25px;
    border: 1px solid transparent;
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    border-radius: 6px;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    background: none;
    color: var(--secondary-btn);
    border: 1px solid var(--secondary-btn);
  }
  .btn-secondary-outline:hover {
    color: var(--white);
    border: 1px solid var(--secondary-btn);
    background: var(--secondary-btn);
  }
  .btn-secondary-outline i {
    font-size: 21px;
    line-height: 1;
    position: relative;
    top: 4px;
  }
  .btn-secondary-outline:focus {
    border-color: var(--secondary-btn);
    background: var(--secondary-btn);
    color: var(--white);
  }
  .btn-secondary-outline:focus:active {
    border-color: var(--secondary-btn);
    background: var(--secondary-btn);
    color: var(--white);
  }

  .btn-tertiary-outline {
    padding: 10px 25px;
    border: 1px solid transparent;
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    border-radius: 6px;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    background: none;
    color: var(--tertiary-btn);
    border: 1px solid var(--tertiary-btn);
  }
  .btn-tertiary-outline:hover {
    color: var(--white);
    border: 1px solid var(--tertiary-btn);
    background: var(--secondary-btn);
  }
  .btn-tertiary-outline i {
    font-size: 21px;
    line-height: 1;
    position: relative;
    top: 4px;
  }
  .btn-tertiary-outline:focus {
    border-color: var(--tertiary-btn);
    background: var(--tertiary-btn);
    color: var(--white);
  }
  .btn-tertiary-outline:focus:active {
    border-color: var(--tertiary-btn);
    background: var(--tertiary-btn);
    color: var(--white);
  }

  .btn-light-outline {
    padding: 10px 25px;
    border: 1px solid transparent;
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    border-radius: 6px;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    background: none;
    color: var(--dark);
  }
  .btn-light-outline:hover {
    color: var(--white);
  }
  .btn-light-outline i {
    font-size: 21px;
    line-height: 1;
    position: relative;
    top: 4px;
  }
  .btn-light-outline:focus {
    border-color: #e6edef;
    background: #e6edef;
    color: var(--dark);
  }
  .btn-light-outline:focus:active {
    border-color: #e6edef;
    background: #e6edef;
    color: var(--dark);
  }

  .btn-dark-outline {
    padding: 10px 25px;
    border: 1px solid transparent;
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    border-radius: 6px;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    background: none;
  }
  .btn-dark-outline:hover {
    color: var(--white);
  }
  .btn-dark-outline i {
    font-size: 21px;
    line-height: 1;
    position: relative;
    top: 4px;
  }
  .btn-dark-outline:focus {
    border-color: var(--dark);
    background: var(--dark);
    color: var(--white);
  }
  .btn-dark-outline:focus:active {
    border-color: var(--dark);
    background: var(--dark);
    color: var(--white);
  }

  .btn-warning-outline {
    padding: 10px 25px;
    border: 1px solid transparent;
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    border-radius: 6px;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    background: none;
  }
  .btn-warning-outline:hover {
    color: var(--white);
  }
  .btn-warning-outline i {
    font-size: 21px;
    line-height: 1;
    position: relative;
    top: 4px;
  }
  .btn-warning-outline:focus {
    border-color: var(--warning);
    background: var(--warning);
    color: var(--white);
  }
  .btn-warning-outline:focus:active {
    border-color: var(--warning);
    background: var(--warning);
    color: var(--white);
  }

  .white-btn:hover {
    border-color: var(--white);
    color: var(--white);
  }

  .red-btn {
    background: #f73e4c;
  }
  .red-btn:hover {
    border-color: #f73e4c;
    color: #f73e4c;
  }

  /*---------------------------------------------
      Cart Animated
  -----------------------------------------------*/
  .morphing-animated {
    -webkit-animation: morphing 10s infinite;
            animation: morphing 10s infinite;
    overflow: hidden;
  }
  @-webkit-keyframes morphing {
    0% {
      border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;
      -webkit-box-shadow: 15px 15px 50px rgba(0, 0, 0, 0.2);
              box-shadow: 15px 15px 50px rgba(0, 0, 0, 0.2);
    }
    25% {
      border-radius: 58% 42% 75% 25%/76% 46% 54% 24%;
    }
    50% {
      border-radius: 50% 50% 33% 67%/55% 27% 73% 45%;
      -webkit-box-shadow: -10px -5px 50px rgba(0, 0, 0, 0.2);
              box-shadow: -10px -5px 50px rgba(0, 0, 0, 0.2);
    }
    75% {
      border-radius: 33% 67% 58% 42%/63% 68% 32% 37%;
    }
  }
  @keyframes morphing {
    0% {
      border-radius: 30% 70% 70% 30%/30% 30% 70% 70%;
      -webkit-box-shadow: 15px 15px 50px rgba(0, 0, 0, 0.2);
              box-shadow: 15px 15px 50px rgba(0, 0, 0, 0.2);
    }
    25% {
      border-radius: 58% 42% 75% 25%/76% 46% 54% 24%;
    }
    50% {
      border-radius: 50% 50% 33% 67%/55% 27% 73% 45%;
      -webkit-box-shadow: -10px -5px 50px rgba(0, 0, 0, 0.2);
              box-shadow: -10px -5px 50px rgba(0, 0, 0, 0.2);
    }
    75% {
      border-radius: 33% 67% 58% 42%/63% 68% 32% 37%;
    }
  }

  .slider-thumb {
    border-radius: 62% 47% 82% 35%/45% 45% 80% 66%;
    will-change: border-radius, transform, opacity;
    animation: sliderShape 5s linear infinite;
    display: block;
    -webkit-animation: sliderShape 5s linear infinite;
  }
  @-webkit-keyframes sliderShape {
    0%, 100% {
      border-radius: 42% 58% 70% 30%/45% 45% 55% 55%;
      -webkit-transform: translate3d(0, 0, 0) rotateZ(0.01deg);
              transform: translate3d(0, 0, 0) rotateZ(0.01deg);
    }
    34% {
      border-radius: 70% 30% 46% 54%/30% 29% 71% 70%;
      -webkit-transform: translate3d(0, 5px, 0) rotateZ(0.01deg);
              transform: translate3d(0, 5px, 0) rotateZ(0.01deg);
    }
    50% {
      -webkit-transform: translate3d(0, 0, 0) rotateZ(0.01deg);
              transform: translate3d(0, 0, 0) rotateZ(0.01deg);
    }
    67% {
      border-radius: 100% 60% 60% 100%/100% 100% 60% 60%;
      -webkit-transform: translate3d(0, -3px, 0) rotateZ(0.01deg);
              transform: translate3d(0, -3px, 0) rotateZ(0.01deg);
    }
  }
  @keyframes sliderShape {
    0%, 100% {
      border-radius: 42% 58% 70% 30%/45% 45% 55% 55%;
      -webkit-transform: translate3d(0, 0, 0) rotateZ(0.01deg);
              transform: translate3d(0, 0, 0) rotateZ(0.01deg);
    }
    34% {
      border-radius: 70% 30% 46% 54%/30% 29% 71% 70%;
      -webkit-transform: translate3d(0, 5px, 0) rotateZ(0.01deg);
              transform: translate3d(0, 5px, 0) rotateZ(0.01deg);
    }
    50% {
      -webkit-transform: translate3d(0, 0, 0) rotateZ(0.01deg);
              transform: translate3d(0, 0, 0) rotateZ(0.01deg);
    }
    67% {
      border-radius: 100% 60% 60% 100%/100% 100% 60% 60%;
      -webkit-transform: translate3d(0, -3px, 0) rotateZ(0.01deg);
              transform: translate3d(0, -3px, 0) rotateZ(0.01deg);
    }
  }

  .wave-animated {
    position: relative;
    overflow: hidden;
    z-index: 0;
  }
  .wave-animated::after {
    content: "";
    position: absolute;
    width: 400px;
    height: 400px;
    z-index: 1;
    top: -250px;
    left: -100px;
    border-radius: 150px;
    background: rgba(255, 255, 255, 0.1);
    -webkit-animation: rotate 30s linear infinite;
            animation: rotate 30s linear infinite;
    z-index: -1;
  }
  @-webkit-keyframes rotate {
    from {
      -webkit-transform: rotate(0);
              transform: rotate(0);
    }
    to {
      -webkit-transform: rotate(1turn);
              transform: rotate(1turn);
    }
  }
  @keyframes rotate {
    from {
      -webkit-transform: rotate(0);
              transform: rotate(0);
    }
    to {
      -webkit-transform: rotate(1turn);
              transform: rotate(1turn);
    }
  }
  .wave-animated::before {
    content: "";
    position: absolute;
    width: 400px;
    height: 400px;
    border-radius: 150px;
    background: rgba(255, 255, 255, 0.1);
    z-index: -1;
    top: -245px;
    left: -98px;
    z-index: 2;
    -webkit-animation: rotate 25s linear infinite;
            animation: rotate 25s linear infinite;
  }
  @keyframes rotate {
    from {
      -webkit-transform: rotate(0);
              transform: rotate(0);
    }
    to {
      -webkit-transform: rotate(1turn);
              transform: rotate(1turn);
    }
  }

  .running {
    -webkit-animation: nudge 10s linear infinite alternate;
            animation: nudge 10s linear infinite alternate;
  }
  @-webkit-keyframes nudge {
    0%, 100% {
      -webkit-transform: translate(0, 0);
              transform: translate(0, 0);
    }
    50% {
      -webkit-transform: translate(-60px, 0);
              transform: translate(-60px, 0);
      @media (max-width: 575px) {
        .running {
          -webkit-transform: translate(-50px, 0) !important;
                  transform: translate(-50px, 0) !important;
        }
      }
    }
    80% {
      -webkit-transform: translate(60px, 0);
              transform: translate(60px, 0);
      @media (max-width: 575px) {
        .running {
          -webkit-transform: translate(50px, 0) !important;
                  transform: translate(50px, 0) !important;
        }
      }
    }
  }
  @keyframes nudge {
    0%, 100% {
      -webkit-transform: translate(0, 0);
              transform: translate(0, 0);
    }
    50% {
      -webkit-transform: translate(-60px, 0);
              transform: translate(-60px, 0);
      @media (max-width: 575px) {
        .running {
          -webkit-transform: translate(-50px, 0) !important;
                  transform: translate(-50px, 0) !important;
        }
      }
    }
    80% {
      -webkit-transform: translate(60px, 0);
              transform: translate(60px, 0);
      @media (max-width: 575px) {
        .running {
          -webkit-transform: translate(50px, 0) !important;
                  transform: translate(50px, 0) !important;
        }
      }
    }
  }

  .runningTwo {
    -webkit-animation: nudge 10s linear infinite alternate;
            animation: nudge 10s linear infinite alternate;
  }
  @keyframes nudge {
    0%, 100% {
      -webkit-transform: translate(0, 0);
              transform: translate(0, 0);
    }
    50% {
      -webkit-transform: translate(-20px, 0);
              transform: translate(-20px, 0);
      @media (max-width: 575px) {
        .runningTwo {
          -webkit-transform: translate(-20px, 0) !important;
                  transform: translate(-20px, 0) !important;
        }
      }
    }
    80% {
      -webkit-transform: translate(20px, 0);
              transform: translate(20px, 0);
      @media (max-width: 575px) {
        .runningTwo {
          -webkit-transform: translate(20px, 0) !important;
                  transform: translate(20px, 0) !important;
        }
      }
    }
  }

  /* bounce-animate */
  .bounce-animate {
    -webkit-animation-name: float-bob;
            animation-name: float-bob;
    -webkit-animation-duration: 2s;
            animation-duration: 2s;
    -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
    /* animation-timing-function: linear; */
    -moz-animation-name: float-bob;
    -moz-animation-duration: 2s;
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: linear;
    -ms-animation-name: float-bob;
    -ms-animation-duration: 2s;
    -ms-animation-iteration-count: infinite;
    -ms-animation-timing-function: linear;
    -o-animation-name: float-bob;
    -o-animation-duration: 2s;
    -o-animation-iteration-count: infinite;
    -o-animation-timing-function: linear;
  }
  @-webkit-keyframes float-bob {
    0% {
      -webkit-transform: translateY(-20px);
      transform: translateY(-20px);
    }
    50% {
      -webkit-transform: translateY(-10px);
      transform: translateY(-10px);
    }
    100% {
      -webkit-transform: translateY(-20px);
      transform: translateY(-20px);
    }
  }

  /* heartbeat */
  .heartbeat {
    -webkit-animation: heartbeat 1s infinite alternate;
            animation: heartbeat 1s infinite alternate;
  }
  @-webkit-keyframes heartbeat {
    to {
      -webkit-transform: scale(1.05);
      transform: scale(1.05);
    }
  }

  .heartbeat2, .section-tittle-four .title::after {
    -webkit-animation: heartbeat 2s infinite alternate;
            animation: heartbeat 2s infinite alternate;
  }
  @-webkit-keyframes heartbeat {
    to {
      -webkit-transform: scale(1.2);
      transform: scale(1.2);
    }
  }

  .heartbeat3 {
    -webkit-animation: heartbeat 2s infinite alternate;
            animation: heartbeat 2s infinite alternate;
  }
  @-webkit-keyframes heartbeat {
    to {
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
    }
  }

  .ZoomTwo {
    position: relative;
    -webkit-animation-name: myanimation;
            animation-name: myanimation;
    -webkit-animation-duration: 3s;
            animation-duration: 3s;
    -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
  }
  @-webkit-keyframes myanimation {
    0% {
      -webkit-transform: scale(0.5);
      transform: scale(0.5);
    }
    50% {
      -webkit-transform: scale(1);
      transform: scale(1);
    }
    100% {
      -webkit-transform: scale(0.5);
      transform: scale(0.5);
    }
  }
  @keyframes myanimation {
    0% {
      -webkit-transform: scale(0.5);
      transform: scale(0.5);
    }
    50% {
      -webkit-transform: scale(1);
      transform: scale(1);
    }
    100% {
      -webkit-transform: scale(0.5);
      transform: scale(0.5);
    }
  }

  /* Rotate */
  .rotateme {
    -webkit-animation-name: rotateme;
    animation-name: rotateme;
    -webkit-animation-duration: 30s;
    animation-duration: 30s;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
  }
  @keyframes rotateme {
    from {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    to {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }
  @-webkit-keyframes rotateme {
    from {
      -webkit-transform: rotate(0deg);
    }
    to {
      -webkit-transform: rotate(360deg);
    }
  }

  .bouncingAnimation {
    -webkit-animation: bouncebubble infinite 5s;
    animation: bouncebubble infinite 5s;
  }
  @-webkit-keyframes bouncebubble {
    1% {
      -webkit-transform: translateY(0);
      transform: translateY(0);
    }
    25% {
      -webkit-transform: translateY(-10px);
      transform: translateY(-10px);
    }
    50% {
      -webkit-transform: translateX(10px);
      transform: translateX(10px);
    }
    75% {
      -webkit-transform: translateX(-10px);
      transform: translateX(-10px);
    }
    100% {
      -webkit-transform: translateY(0);
      transform: translateY(0);
      -webkit-transform: translateX(0);
      transform: translateX(0);
    }
  }
  @keyframes bouncebubble {
    1% {
      -webkit-transform: translateY(0);
      transform: translateY(0);
    }
    25% {
      -webkit-transform: translateY(-10px);
      transform: translateY(-10px);
    }
    50% {
      -webkit-transform: translateX(10px);
      transform: translateX(10px);
    }
    75% {
      -webkit-transform: translateX(-10px);
      transform: translateX(-10px);
    }
    100% {
      -webkit-transform: translateY(0);
      transform: translateY(0);
      -webkit-transform: translateX(0);
      transform: translateX(0);
    }
  }

  .live {
    display: inline-block;
    position: relative;
  }
  .live::before {
    content: "";
    position: absolute;
    left: 0;
    top: -10px;
    background-color: var(--secondary);
    width: 10px;
    height: 10px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 50%;
    z-index: 1;
  }
  .live::after {
    content: "";
    display: block;
    position: absolute;
    background-color: rgba(225, 36, 84, 0.3);
    width: 20px;
    height: 20px;
    border-radius: 50%;
    -webkit-animation: live 2s ease-in-out infinite;
    animation: live 2s ease-in-out infinite;
    z-index: 1;
    top: -15px;
    left: -5px;
  }
  @-webkit-keyframes live {
    0% {
      -webkit-transform: scale(1, 1);
              transform: scale(1, 1);
    }
    100% {
      -webkit-transform: scale(3.5, 3.5);
              transform: scale(3.5, 3.5);
      background-color: rgba(225, 36, 84, 0.3);
    }
  }
  @keyframes live {
    0% {
      -webkit-transform: scale(1, 1);
              transform: scale(1, 1);
    }
    100% {
      -webkit-transform: scale(3.5, 3.5);
              transform: scale(3.5, 3.5);
      background-color: rgba(255, 0, 0, 0);
    }
  }

  .loader-line {
    width: 200px;
    height: 3px;
    position: relative;
    overflow: hidden;
    background-color: #ddd;
    margin: 100px auto;
    border-radius: 20px;
  }

  .loader-line:before {
    content: "";
    position: absolute;
    left: -50%;
    height: 3px;
    width: 40%;
    background-color: coral;
    -webkit-animation: lineAnim 1s linear infinite;
    animation: lineAnim 1s linear infinite;
    border-radius: 20px;
  }

  @-webkit-keyframes lineAnim {
    0% {
      left: -40%;
    }
    50% {
      left: 20%;
      width: 80%;
    }
    100% {
      left: 100%;
      width: 100%;
    }
  }

  @keyframes lineAnim {
    0% {
      left: -40%;
    }
    50% {
      left: 20%;
      width: 80%;
    }
    100% {
      left: 100%;
      width: 100%;
    }
  }
  .routedOne, .section-tittle-four .title::before {
    -webkit-animation-name: des2;
    animation-name: des2;
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-direction: alternate;
    animation-direction: alternate;
  }
  @-webkit-keyframes des2 {
    from {
      -webkit-transform: rotate(-5deg);
      transform: rotate(-5deg);
    }
    to {
      -webkit-transform: rotate(5deg);
      transform: rotate(5deg);
    }
  }
  @keyframes des2 {
    from {
      -webkit-transform: rotate(-5deg);
      transform: rotate(-5deg);
    }
    to {
      -webkit-transform: rotate(5deg);
      transform: rotate(5deg);
    }
  }

  .routedTwo {
    max-width: 800px;
    -webkit-animation-name: shape;
    animation-name: shape;
    -webkit-animation-duration: 3s;
    animation-duration: 3s;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-direction: alternate;
    animation-direction: alternate;
  }
  @-webkit-keyframes shape {
    from {
      -webkit-transform: rotateY(-20deg);
      transform: rotateY(-20deg);
    }
    to {
      -webkit-transform: rotateY(15deg) rotateX(10deg);
      transform: rotateY(15deg) rotateX(10deg);
    }
  }
  @keyframes shape {
    from {
      -webkit-transform: rotateY(-20deg);
      transform: rotateY(-20deg);
    }
    to {
      -webkit-transform: rotateY(15deg) rotateX(10deg);
      transform: rotateY(15deg) rotateX(10deg);
    }
  }

  .slideEffect, .section-tittle-one .title .textColor, .section-tittle-pro .tittle .textColor, .section-tittle-four .title .textColor {
    background: -webkit-linear-gradient(left, var(--heading-color), rgba(var(--primary-rgb), 0.4), var(--heading-color));
    background-size: 1600px 200px;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    -webkit-animation-duration: 3s;
            animation-duration: 3s;
    -webkit-animation-name: animationgradienttitle;
            animation-name: animationgradienttitle;
    -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
    -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
  }
  @-webkit-keyframes animationgradienttitle {
    0% {
      background-position: 0 1600px;
    }
    100% {
      background-position: 1600px 0;
    }
  }
  @keyframes animationgradienttitle {
    0% {
      background-position: 0 1600px;
    }
    100% {
      background-position: 1600px 0;
    }
  }

  .textEffect2 {
    background: url(../../assets/images/templates1.png);
    background-size: auto 200%;
    background-clip: text;
    text-fill-color: transparent;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    -webkit-animation: shine 8s linear infinite;
            animation: shine 8s linear infinite;
  }
  .textEffect2:nth-child(2) {
    top: 50vh;
  }
  @keyframes shine {
    from {
      background-position: center 0;
    }
    to {
      background-position: center 200%;
    }
  }

  .LR-animated {
    -webkit-animation: question 1.5s linear 1;
            animation: question 1.5s linear 1;
    -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
  }

  @-webkit-keyframes question {
    0% {
      -webkit-transform: scale(1), rotate(0deg);
              transform: scale(1), rotate(0deg);
    }
    25% {
      -webkit-transform: rotate(10deg);
              transform: rotate(10deg);
    }
    50% {
      -webkit-transform: scale(1.1), rotate(0deg);
              transform: scale(1.1), rotate(0deg);
    }
    75% {
      -webkit-transform: rotate(-10deg);
              transform: rotate(-10deg);
    }
    100% {
      -webkit-transform: scale(1);
              transform: scale(1);
    }
  }

  @keyframes question {
    0% {
      -webkit-transform: scale(1), rotate(0deg);
              transform: scale(1), rotate(0deg);
    }
    25% {
      -webkit-transform: rotate(10deg);
              transform: rotate(10deg);
    }
    50% {
      -webkit-transform: scale(1.1), rotate(0deg);
              transform: scale(1.1), rotate(0deg);
    }
    75% {
      -webkit-transform: rotate(-10deg);
              transform: rotate(-10deg);
    }
    100% {
      -webkit-transform: scale(1);
              transform: scale(1);
    }
  }
  .UD-animated {
    -webkit-animation: float 1.5s linear 1;
            animation: float 1.5s linear 1;
    -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
  }
  @-webkit-keyframes float {
    0% {
      -webkit-transform: translate(0px, 0px);
              transform: translate(0px, 0px);
    }
    25% {
      -webkit-transform: translate(0px, 5px);
              transform: translate(0px, 5px);
    }
    50% {
      -webkit-transform: translate(0px, 0px);
              transform: translate(0px, 0px);
    }
    75% {
      -webkit-transform: translate(0px, 5px);
              transform: translate(0px, 5px);
    }
    100% {
      -webkit-transform: translate(0px, 0px);
              transform: translate(0px, 0px);
    }
  }
  @keyframes float {
    0% {
      -webkit-transform: translate(0px, 0px);
              transform: translate(0px, 0px);
    }
    25% {
      -webkit-transform: translate(0px, 5px);
              transform: translate(0px, 5px);
    }
    50% {
      -webkit-transform: translate(0px, 0px);
              transform: translate(0px, 0px);
    }
    75% {
      -webkit-transform: translate(0px, 5px);
              transform: translate(0px, 5px);
    }
    100% {
      -webkit-transform: translate(0px, 0px);
              transform: translate(0px, 0px);
    }
  }

  @-webkit-keyframes pulse {
    0% {
      -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
    }
    70% {
      -webkit-box-shadow: 0 0 0 45px rgba(255, 255, 255, 0);
    }
    100% {
      -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
    }
  }
  @keyframes pulse {
    0% {
      -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
              box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
    }
    70% {
      -webkit-box-shadow: 0 0 0 45px rgba(255, 255, 255, 0);
              box-shadow: 0 0 0 45px rgba(255, 255, 255, 0);
    }
    100% {
      -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
              box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
    }
  }

  @-webkit-keyframes jump {
    0% {
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }
    40% {
      -webkit-transform: translate3d(0, 50%, 0);
      transform: translate3d(0, 50%, 0);
    }
    100% {
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }
  }
  @keyframes jump {
    0% {
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }
    40% {
      -webkit-transform: translate3d(0, 50%, 0);
      transform: translate3d(0, 50%, 0);
    }
    100% {
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }
  }
  @-webkit-keyframes rotated {
    0% {
      -webkit-transform: rotate(0);
      transform: rotate(0);
    }
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }
  @keyframes rotated {
    0% {
      -webkit-transform: rotate(0);
      transform: rotate(0);
    }
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }
  @-webkit-keyframes rotatedHalf {
    0% {
      -webkit-transform: rotate(0);
      transform: rotate(0);
    }
    50% {
      -webkit-transform: rotate(90deg);
      transform: rotate(90deg);
    }
    100% {
      -webkit-transform: rotate(0);
      transform: rotate(0);
    }
  }
  @keyframes rotatedHalf {
    0% {
      -webkit-transform: rotate(0);
      transform: rotate(0);
    }
    50% {
      -webkit-transform: rotate(90deg);
      transform: rotate(90deg);
    }
    100% {
      -webkit-transform: rotate(0);
      transform: rotate(0);
    }
  }
  @-webkit-keyframes rotatedHalfTwo {
    0% {
      -webkit-transform: rotate(-90deg);
      transform: rotate(-90deg);
    }
    100% {
      -webkit-transform: rotate(90deg);
      transform: rotate(90deg);
    }
  }
  @keyframes rotatedHalfTwo {
    0% {
      -webkit-transform: rotate(-90deg);
      transform: rotate(-90deg);
    }
    100% {
      -webkit-transform: rotate(90deg);
      transform: rotate(90deg);
    }
  }
  @-webkit-keyframes scale-upOne {
    0% {
      -webkit-transform: scale(1);
      transform: scale(1);
    }
    100% {
      -webkit-transform: scale(0.2);
      transform: scale(0.2);
    }
  }
  @keyframes scale-upOne {
    0% {
      -webkit-transform: scale(1);
      transform: scale(1);
    }
    100% {
      -webkit-transform: scale(0.2);
      transform: scale(0.2);
    }
  }
  @-webkit-keyframes scale-right {
    0% {
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
    }
    50% {
      -webkit-transform: translateX(50%);
      transform: translateX(50%);
    }
    100% {
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
    }
  }
  @keyframes scale-right {
    0% {
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
    }
    50% {
      -webkit-transform: translateX(50%);
      transform: translateX(50%);
    }
    100% {
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
    }
  }
  @-webkit-keyframes fade-in {
    0% {
      opacity: 0.7;
    }
    40% {
      opacity: 1;
    }
    100% {
      opacity: 0.7;
    }
  }
  @keyframes fade-in {
    0% {
      opacity: 0.7;
    }
    40% {
      opacity: 1;
    }
    100% {
      opacity: 0.7;
    }
  }
  @-webkit-keyframes hvr-ripple-out {
    0% {
      top: 0px;
      right: 0px;
      bottom: 0px;
      left: 0px;
      opacity: 1;
    }
    100% {
      top: -6px;
      right: -6px;
      bottom: -6px;
      left: -6px;
      opacity: 0;
    }
  }
  @keyframes hvr-ripple-out {
    0% {
      top: 0px;
      right: 0px;
      bottom: 0px;
      left: 0px;
      opacity: 1;
    }
    100% {
      top: -6px;
      right: -6px;
      bottom: -6px;
      left: -6px;
      opacity: 0;
    }
  }
  @-webkit-keyframes hvr-ripple-out-two {
    0% {
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      opacity: 1;
    }
    100% {
      top: -12px;
      right: -12px;
      bottom: -12px;
      left: -12px;
      opacity: 0;
    }
  }
  @keyframes hvr-ripple-out-two {
    0% {
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      opacity: 1;
    }
    100% {
      top: -12px;
      right: -12px;
      bottom: -12px;
      left: -12px;
      opacity: 0;
    }
  }
  @-webkit-keyframes scale-up-one {
    0% {
      -webkit-transform: scale(1);
      transform: scale(1);
    }
    40% {
      -webkit-transform: scale(0.5);
      transform: scale(0.5);
    }
    100% {
      -webkit-transform: scale(1);
      transform: scale(1);
    }
  }
  @keyframes scale-up-one {
    0% {
      -webkit-transform: scale(1);
      transform: scale(1);
    }
    40% {
      -webkit-transform: scale(0.5);
      transform: scale(0.5);
    }
    100% {
      -webkit-transform: scale(1);
      transform: scale(1);
    }
  }
  @-webkit-keyframes scale-up-two {
    0% {
      -webkit-transform: scale(0.5);
      transform: scale(0.5);
    }
    40% {
      -webkit-transform: scale(0.8);
      transform: scale(0.8);
    }
    100% {
      -webkit-transform: scale(0.5);
      transform: scale(0.5);
    }
  }
  @keyframes scale-up-two {
    0% {
      -webkit-transform: scale(0.5);
      transform: scale(0.5);
    }
    40% {
      -webkit-transform: scale(0.8);
      transform: scale(0.8);
    }
    100% {
      -webkit-transform: scale(0.5);
      transform: scale(0.5);
    }
  }
  @-webkit-keyframes scale-up-three {
    0% {
      -webkit-transform: scale(0.7);
      transform: scale(0.7);
    }
    40% {
      -webkit-transform: scale(0.4);
      transform: scale(0.4);
    }
    100% {
      -webkit-transform: scale(0.7);
      transform: scale(0.7);
    }
  }
  @keyframes scale-up-three {
    0% {
      -webkit-transform: scale(0.7);
      transform: scale(0.7);
    }
    40% {
      -webkit-transform: scale(0.4);
      transform: scale(0.4);
    }
    100% {
      -webkit-transform: scale(0.7);
      transform: scale(0.7);
    }
  }
  @keyframes animationFramesOne {
    0% {
      -webkit-transform: translate(0px, 0px) rotate(0deg);
              transform: translate(0px, 0px) rotate(0deg);
    }
    20% {
      -webkit-transform: translate(73px, -1px) rotate(36deg);
              transform: translate(73px, -1px) rotate(36deg);
    }
    40% {
      -webkit-transform: translate(141px, 72px) rotate(72deg);
              transform: translate(141px, 72px) rotate(72deg);
    }
    60% {
      -webkit-transform: translate(83px, 122px) rotate(108deg);
              transform: translate(83px, 122px) rotate(108deg);
    }
    80% {
      -webkit-transform: translate(-40px, 72px) rotate(144deg);
              transform: translate(-40px, 72px) rotate(144deg);
    }
    100% {
      -webkit-transform: translate(0px, 0px) rotate(0deg);
              transform: translate(0px, 0px) rotate(0deg);
    }
  }
  @-webkit-keyframes animationFramesOne {
    0% {
      -webkit-transform: translate(0px, 0px) rotate(0deg);
    }
    20% {
      -webkit-transform: translate(73px, -1px) rotate(36deg);
    }
    40% {
      -webkit-transform: translate(141px, 72px) rotate(72deg);
    }
    60% {
      -webkit-transform: translate(83px, 122px) rotate(108deg);
    }
    80% {
      -webkit-transform: translate(-40px, 72px) rotate(144deg);
    }
    100% {
      -webkit-transform: translate(0px, 0px) rotate(0deg);
    }
  }
  @keyframes animationFramesTwo {
    0% {
      -webkit-transform: translate(0px, 0px) rotate(0deg) scale(1);
              transform: translate(0px, 0px) rotate(0deg) scale(1);
    }
    20% {
      -webkit-transform: translate(73px, -1px) rotate(36deg) scale(0.9);
              transform: translate(73px, -1px) rotate(36deg) scale(0.9);
    }
    40% {
      -webkit-transform: translate(141px, 72px) rotate(72deg) scale(1);
              transform: translate(141px, 72px) rotate(72deg) scale(1);
    }
    60% {
      -webkit-transform: translate(83px, 122px) rotate(108deg) scale(1.2);
              transform: translate(83px, 122px) rotate(108deg) scale(1.2);
    }
    80% {
      -webkit-transform: translate(-40px, 72px) rotate(144deg) scale(1.1);
              transform: translate(-40px, 72px) rotate(144deg) scale(1.1);
    }
    100% {
      -webkit-transform: translate(0px, 0px) rotate(0deg) scale(1);
              transform: translate(0px, 0px) rotate(0deg) scale(1);
    }
  }
  @-webkit-keyframes animationFramesTwo {
    0% {
      -webkit-transform: translate(0px, 0px) rotate(0deg) scale(1);
    }
    20% {
      -webkit-transform: translate(73px, -1px) rotate(36deg) scale(0.9);
    }
    40% {
      -webkit-transform: translate(141px, 72px) rotate(72deg) scale(1);
    }
    60% {
      -webkit-transform: translate(83px, 122px) rotate(108deg) scale(1.2);
    }
    80% {
      -webkit-transform: translate(-40px, 72px) rotate(144deg) scale(1.1);
    }
    100% {
      -webkit-transform: translate(0px, 0px) rotate(0deg) scale(1);
    }
  }
  @keyframes animationFramesThree {
    0% {
      -webkit-transform: translate(165px, -179px);
              transform: translate(165px, -179px);
    }
    100% {
      -webkit-transform: translate(-346px, 617px);
              transform: translate(-346px, 617px);
    }
  }
  @-webkit-keyframes animationFramesThree {
    0% {
      -webkit-transform: translate(165px, -179px);
    }
    100% {
      -webkit-transform: translate(-346px, 617px);
    }
  }
  @keyframes animationFramesFour {
    0% {
      -webkit-transform: translate(-300px, 151px) rotate(0deg);
              transform: translate(-300px, 151px) rotate(0deg);
    }
    100% {
      -webkit-transform: translate(251px, -200px) rotate(180deg);
              transform: translate(251px, -200px) rotate(180deg);
    }
  }
  @-webkit-keyframes animationFramesFour {
    0% {
      -webkit-transform: translate(-300px, 151px) rotate(0deg);
    }
    100% {
      -webkit-transform: translate(251px, -200px) rotate(180deg);
    }
  }
  @keyframes animationFramesFive {
    0% {
      -webkit-transform: translate(61px, -99px) rotate(0deg);
              transform: translate(61px, -99px) rotate(0deg);
    }
    21% {
      -webkit-transform: translate(4px, -190px) rotate(38deg);
              transform: translate(4px, -190px) rotate(38deg);
    }
    41% {
      -webkit-transform: translate(-139px, -200px) rotate(74deg);
              transform: translate(-139px, -200px) rotate(74deg);
    }
    60% {
      -webkit-transform: translate(-263px, -164px) rotate(108deg);
              transform: translate(-263px, -164px) rotate(108deg);
    }
    80% {
      -webkit-transform: translate(-195px, -49px) rotate(144deg);
              transform: translate(-195px, -49px) rotate(144deg);
    }
    100% {
      -webkit-transform: translate(-1px, 0px) rotate(180deg);
              transform: translate(-1px, 0px) rotate(180deg);
    }
  }
  @-webkit-keyframes animationFramesFive {
    0% {
      -webkit-transform: translate(61px, -99px) rotate(0deg);
    }
    21% {
      -webkit-transform: translate(4px, -190px) rotate(38deg);
    }
    41% {
      -webkit-transform: translate(-139px, -200px) rotate(74deg);
    }
    60% {
      -webkit-transform: translate(-263px, -164px) rotate(108deg);
    }
    80% {
      -webkit-transform: translate(-195px, -49px) rotate(144deg);
    }
    100% {
      -webkit-transform: translate(-1px, 0px) rotate(180deg);
    }
  }
  @keyframes gradientBG {
    0% {
      background-position: 0 0;
    }
    50% {
      background-position: 300% 0;
    }
    100% {
      background-position: 0 0;
    }
  }
  @-webkit-keyframes gradientBG {
    0% {
      background-position: 0 0;
    }
    50% {
      background-position: 300% 0;
    }
    100% {
      background-position: 0 0;
    }
  }
  @-webkit-keyframes imageBgAnim {
    0% {
      background-position: 0 0;
    }
    50% {
      background-position: 120% 0;
    }
    100% {
      background-position: 0 0;
    }
  }
  @keyframes imageBgAnim {
    0% {
      background-position: 0 0;
    }
    50% {
      background-position: 120% 0;
    }
    100% {
      background-position: 0 0;
    }
  }
  @-webkit-keyframes gradientBG {
    0% {
      background-position: 0 0;
    }
    50% {
      background-position: 120% 0;
    }
    100% {
      background-position: 0 0;
    }
  }
  .textFlip {
    position: relative;
    display: inline-block !important;
  }
  .textFlip .single {
    text-transform: lowercase;
    -webkit-transition: all 0.4s ease-out 0s;
    transition: all 0.4s ease-out 0s;
    position: relative;
    display: inline-block;
    -webkit-animation: flip 2s infinite;
            animation: flip 2s infinite;
    -webkit-animation-delay: calc(0.1s * var(--i));
            animation-delay: calc(0.1s * var(--i));
  }
  .textFlip .single:first-child {
    text-transform: uppercase;
  }
  @-webkit-keyframes flip {
    0%, 80% {
      -webkit-transform: rotateY(360deg);
              transform: rotateY(360deg);
    }
  }
  @keyframes flip {
    0%, 80% {
      -webkit-transform: rotateY(360deg);
              transform: rotateY(360deg);
    }
  }

  .colorEffect {
    background-image: -webkit-gradient(linear, left top, right top, color-stop(45%, var(--primary)), color-stop(55%, var(--heading-color)));
    background-image: linear-gradient(to right, var(--primary) 45%, var(--heading-color) 55%);
    background-size: 220% 100%;
    background-position: 100% 50%;
    cursor: pointer;
    color: transparent;
    -webkit-background-clip: text;
    background-clip: text;
    background-repeat: no-repeat;
    -webkit-transition: 0.9s ease-out;
    transition: 0.9s ease-out;
  }
  .colorEffect:hover {
    background-position: 0% 50%;
  }

  .colorEffect2 {
    background-image: -webkit-gradient(linear, left top, right top, color-stop(45%, var(--primary)), color-stop(55%, var(--heading-color-tow)));
    background-image: linear-gradient(to right, var(--primary) 45%, var(--heading-color-tow) 55%);
    background-size: 220% 100%;
    background-position: 100% 50%;
    cursor: pointer;
    color: transparent;
    -webkit-background-clip: text;
    background-clip: text;
    background-repeat: no-repeat;
    -webkit-transition: 0.6s ease-out;
    transition: 0.6s ease-out;
  }
  .colorEffect2:hover {
    background-position: 0% 50%;
  }

  .colorEffect2 {
    background-image: -webkit-gradient(linear, left top, right top, color-stop(45%, var(--primary)), color-stop(55%, var(--paragraph-color)));
    background-image: linear-gradient(to right, var(--primary) 45%, var(--paragraph-color) 55%);
    background-size: 220% 100%;
    background-position: 100% 50%;
    cursor: pointer;
    color: transparent;
    -webkit-background-clip: text;
    background-clip: text;
    background-repeat: no-repeat;
    -webkit-transition: 0.6s ease-out;
    transition: 0.6s ease-out;
  }
  .colorEffect2:hover {
    background-position: 0% 50%;
  }

  .colorEffect3 {
    background-image: -webkit-gradient(linear, left top, right top, color-stop(45%, var(--primary)), color-stop(55%, #ffffff));
    background-image: linear-gradient(to right, var(--primary) 45%, #ffffff 55%);
    background-size: 220% 100%;
    background-position: 100% 50%;
    cursor: pointer;
    color: transparent;
    -webkit-background-clip: text;
    background-clip: text;
    background-repeat: no-repeat;
    -webkit-transition: 0.9s ease-out;
    transition: 0.9s ease-out;
  }
  .colorEffect3:hover {
    background-position: 0% 50%;
  }

  .imgEffect {
    overflow: hidden;
    position: relative;
  }
  .imgEffect::before {
    position: absolute;
    top: 0;
    left: -75%;
    z-index: 2;
    display: block;
    content: "";
    width: 50%;
    height: 100%;
    background: -webkit-gradient(linear, left top, right top, from(rgba(255, 255, 255, 0)), to(rgba(255, 255, 255, 0.2)));
    background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.2) 100%);
    -webkit-transform: skewX(-25deg);
    transform: skewX(-25deg);
  }
  @-webkit-keyframes shine {
    100% {
      left: 125%;
    }
  }
  @keyframes shine {
    100% {
      left: 125%;
    }
  }
  .imgEffect img {
    border-radius: 12px;
    width: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    -webkit-transform: scale(1.02);
    transform: scale(1.02);
    transition: all 1.5s ease-out;
    -webkit-transition: all 1.5s ease-out;
    -moz-transition: all 1.5s ease-out;
    -ms-transition: all 1.5s ease-out;
  }
  .imgEffect:hover::before {
    -webkit-animation: shine 0.8s;
    animation: shine 0.8s;
  }
  .imgEffect:hover img {
    -webkit-transform: scale3d(1.1, 1.1, 1);
    transform: scale3d(1.1, 1.1, 1);
  }

  .imgEffect2 img {
    border-radius: 7px 7px 0 0;
    width: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    -webkit-transform: scale(1.02);
    transform: scale(1.02);
    transition: all 1.5s ease-out;
    -webkit-transition: all 1.5s ease-out;
    -moz-transition: all 1.5s ease-out;
    -ms-transition: all 1.5s ease-out;
  }
  .imgEffect2:hover img {
    -webkit-transform: scale3d(1.1, 1.1, 1);
    transform: scale3d(1.1, 1.1, 1);
  }

  .zoomImg {
    overflow: hidden;
  }
  .zoomImg img {
    width: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    -webkit-transform: scale(1.02);
    transform: scale(1.02);
    transition: all 1.5s ease-out;
    -webkit-transition: all 1.5s ease-out;
    -moz-transition: all 1.5s ease-out;
    -ms-transition: all 1.5s ease-out;
  }
  .zoomImg:hover::before {
    -webkit-animation: shine 0.8s;
    animation: shine 0.8s;
  }
  .zoomImg:hover img {
    -webkit-transform: scale3d(1.1, 1.1, 1);
    transform: scale3d(1.1, 1.1, 1);
  }

  .tittleBgColor::before {
    -webkit-transition: all 0.4s ease-out 0s;
    transition: all 0.4s ease-out 0s;
    background: var(--primary);
    content: "";
    position: absolute;
    top: 7px;
    left: -10px;
    height: calc(84% + 5px);
    width: calc(100% + 20px);
    z-index: -1;
    border-radius: 5px;
  }
  @media (max-width: 991px) {
    .tittleBgColor::before {
      top: 2px;
    }
  }
  .tittleBgColor:hover {
    color: var(--primary);
    background-position: 0% 50%;
  }
  .tittleBgColor:hover::before {
    background: var(--white);
  }

  .hvr-wobble-bottom {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    -moz-osx-font-smoothing: grayscale;
    -webkit-transform-origin: 0 100%;
    transform-origin: 0 100%;
  }

  .hvr-wobble-bottom:hover {
    -webkit-animation-name: hvr-wobble-bottom;
    animation-name: hvr-wobble-bottom;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    -webkit-animation-iteration-count: 1;
    animation-iteration-count: 1;
  }
  @-webkit-keyframes hvr-wobble-bottom {
    16.65% {
      -webkit-transform: skew(-8deg);
      transform: skew(-8deg);
    }
    33.3% {
      -webkit-transform: skew(8deg);
      transform: skew(8deg);
    }
    49.95% {
      -webkit-transform: skew(-6deg);
      transform: skew(-6deg);
    }
    66.6% {
      -webkit-transform: skew(4deg);
      transform: skew(4deg);
    }
    83.25% {
      -webkit-transform: skew(-2deg);
      transform: skew(-2deg);
    }
    100% {
      -webkit-transform: skew(0);
      transform: skew(0);
    }
  }

  .header-area {
    -webkit-box-shadow: 0 0 10px 0 rgba(6, 27, 40, 0.1);
            box-shadow: 0 0 10px 0 rgba(6, 27, 40, 0.1);
  }
  @media (max-width: 991px) {
    .header-area {
      padding: 18px 10px;
    }
  }
  .header-area .main-menu .listing {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
  .header-area .main-menu .listing .single-list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    position: relative;
    z-index: 1;
  }
  .header-area .main-menu .listing .single-list .single {
    -webkit-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
    color: var(--primary-title);
    font-weight: 500;
    padding: 38px 20px;
    display: block;
    font-size: 16px;
    text-transform: capitalize;
  }
  .header-area .main-menu .listing .single-list.search {
    margin-left: 12px;
  }
  .header-area .main-menu .listing .single-list.search .single {
    padding: 5px 8px;
  }
  .header-area .main-menu .listing .single-list.search i {
    background: var(--primary);
    cursor: pointer;
    padding: 15px 15px;
    color: #fff;
    font-size: 16px;
    border-radius: 50%;
  }
  .header-area .main-menu .listing .single-list:hover > .single {
    color: var(--primary);
  }
  .header-area .main-menu .listing .single-list:hover > .single::before {
    left: 0;
    right: auto;
    width: 100%;
    -webkit-transition: 0.4s;
    transition: 0.4s;
  }
  .header-area .main-menu .listing .listing.submenu {
    display: block;
    position: absolute;
    width: 220px;
    background: #fff;
    left: 0;
    top: 90%;
    visibility: hidden;
    opacity: 0;
    -webkit-box-shadow: 0 0 10px 3px rgba(0, 0, 0, 0.05);
            box-shadow: 0 0 10px 3px rgba(0, 0, 0, 0.05);
    padding: 17px 0;
    -webkit-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
    border-radius: 4px;
  }
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .header-area .main-menu .listing .listing.submenu {
      right: 0;
      left: auto;
    }
  }
  .header-area .main-menu .listing .listing.submenu > .single-list {
    margin-left: 7px;
    display: block;
  }
  .header-area .main-menu .listing .listing.submenu > .single-list > .single {
    padding: 6px 10px !important;
    font-size: 16px;
    text-transform: capitalize;
  }
  .header-area .main-menu .listing .listing.submenu > .single-list > .single::before {
    position: unset;
  }
  .header-area .main-menu .listing .listing.submenu > .single-list > .single:hover {
    color: var(--primary);
    background: none;
    padding-left: 13px !important;
  }

  .header-style-one .main-menu .listing > .single-list > .single {
    color: #fff;
  }
  .header-style-one .main-menu .listing.submenu > .single-list > .single {
    color: var(--primary-title);
    padding: 8px 14px;
  }

  .main-header .listing > .single-list:hover > .listing.submenu {
    visibility: visible;
    opacity: 1;
    top: 100%;
  }

  .header-transparent {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 9;
  }

  .mobile_menu {
    position: absolute;
    right: 0px;
    width: 100%;
    z-index: 99;
  }
  .mobile_menu .slicknav_menu {
    background: transparent;
    margin-top: 0px !important;
  }
  .mobile_menu .slicknav_menu .slicknav_btn {
    top: -38px;
    right: 20px;
  }
  .mobile_menu .slicknav_menu .slicknav_btn .slicknav_icon-bar {
    background-color: var(--white) !important;
  }
  .mobile_menu .slicknav_menu .slicknav_nav {
    margin-top: 8px !important;
  }
  .mobile_menu .slicknav_menu .slicknav_nav a {
    font-size: 16px;
  }
  .mobile_menu .slicknav_menu .slicknav_nav a:hover {
    color: var(--primary);
  }
  .mobile_menu .slicknav_menu .slicknav_nav .btn-primary-fill {
    display: inline-block;
    padding: 11px 16px;
    color: var(--white);
    border-radius: 6px;
  }
  .mobile_menu .slicknav_menu .slicknav_nav .header-btn2 {
    display: inline-block;
    border-radius: 30px;
    margin-left: 0;
  }
  .mobile_menu .slicknav_menu .slicknav_nav .slicknav_item a {
    padding: 0 !important;
  }
  .mobile_menu .slicknav_menu .slicknav_nav .slicknav_arrow {
    color: var(--primary);
  }

  .header-sticky.sticky-bar {
    background: var(--section-bg-two);
  }
  @media (max-width: 991px) {
    .header-sticky.sticky-bar {
      padding: 15px 0;
    }
  }
  .header-sticky.sticky-bar .main-menu .listing .single-list .single {
    padding: 24px 17px;
  }

  .documentation {
    /* sub */
  }
  .documentation .doc-sidebar {
    padding: 30px 20px;
    padding-top: 30px;
    border-radius: 0;
    background: #fff;
    height: 100%;
    text-align: right;
    padding-top: 60px;
    -webkit-box-shadow: 6px 0px 6px rgba(98, 93, 93, 0.1);
            box-shadow: 6px 0px 6px rgba(98, 93, 93, 0.1);
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    width: 23%;
    padding-right: 0;
  }
  @media (max-width: 1199px) {
    .documentation .doc-sidebar {
      width: 280px;
    }
  }
  .documentation .single-list i {
    margin-right: 6px;
    color: #aaa;
    font-size: 18px;
  }
  .documentation .doc-sidebar .doc-list-wrapper .single-list .items {
    display: block;
    font-size: 20px;
    padding-right: 40px;
    color: var(--primary-title);
    position: relative;
    overflow: hidden;
    font-weight: 600;
    border: 3px solid;
    margin-bottom: 30px;
    border: 0;
    border-right: 3px solid transparent;
  }
  .documentation .doc-sidebar .doc-list-wrapper .single-list .items.selected {
    border-right: 3px solid var(--primary);
    color: var(--primary);
    letter-spacing: 0.3px;
  }
  .documentation .doc-sidebar .doc-list-wrapper .single-list .items:hover {
    border-right: 3px solid var(--primary);
    color: var(--primary);
    letter-spacing: 0.3px;
  }
  .documentation .sub-doc-list-wrapper {
    margin: 16px auto;
    margin-left: 19px;
  }
  .documentation .sub-doc-list-wrapper .sub-doc-list-wrapper .sub-single-list {
    padding: 5px 0;
    display: block;
  }
  .documentation .sub-doc-list-wrapper .sub-doc-list-wrapper .sub-single-list i {
    margin-right: 6px;
    color: rgba(108, 107, 107, 0.6196078431);
    font-size: 17px;
  }
  .documentation .sub-doc-list-wrapper .sub-doc-list-wrapper .sub-single-list .sub-items {
    color: #6c6b6b;
    font-size: 16px;
    text-transform: capitalize;
  }

  .list-style-disc {
    list-style: disc !important;
  }

  .single-documentation .title {
    color: var(--primary-title);
    font-family: var(--inter);
    text-transform: capitalize;
    font-size: 25px;
    display: block;
    line-height: 1.4;
    border-bottom: 1px solid rgba(170, 170, 170, 0.7215686275);
  }
  .single-documentation .listing .single-list {
    color: rgba(66, 72, 79, 0.6117647059);
    font-size: 16px;
    font-weight: 500;
    margin-bottom: 8px;
    list-style: decimal;
    margin-left: 15px;
  }

  .introduction .title {
    font-size: 20px;
    color: #198050;
    padding: 16px 0 16px 14px;
    background: rgba(126, 241, 188, 0.2588235294);
    margin: 0;
    margin-bottom: 0px;
    border-left: 4px solid rgba(75, 233, 160, 0.5882352941);
    margin-bottom: 30px;
    line-height: 1.3;
  }

  .note {
    background: #FBE3E4;
    padding: 10px;
    border-left: 4px solid #e9a1a5;
  }
  .note strong {
    color: #B93911;
  }

  .header-social .single-list {
    display: inline-block;
    border-right: 0px !important;
    margin-right: 0px;
    padding-right: 0px;
  }
  .header-social .single-list a {
    border: 1px solid var(--primary-border);
    font-size: 18px;
    margin-left: 6px;
    width: 40px;
    height: 40px;
    display: inline-block;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    color: var(--primary-title);
    text-align: center;
  }
  .header-social .single-list a i {
    margin: 0;
  }
  .header-social .single-list a:hover {
    color: var(--white) !important;
    background: var(--primary-title);
    border: 1px solid transparent;
  }
  .header-social .single-list a:hover i {
    color: var(--white) !important;
  }

  @media (max-width: 991px) {
    #introduction {
      padding-top: 30px;
    }
  }

  footer .copyright {
    padding: 20px 5px;
  }
  footer .copyright a {
    font-weight: 600;
  }
  footer .copyright p {
    font-size: 14px;
    font-weight: 500;
    color: var(--white);
    text-transform: capitalize;
  }

  @media (max-width: 575px) {
    .footer-content {
      margin-bottom: 40px;
    }
    .footer-content .title {
      font-size: 34px !important;
    }
  }

  @media (max-width: 991px) {
    .sidebar-body-overlay {
      -webkit-transition: all 0.3s ease-out 0s;
      transition: all 0.3s ease-out 0s;
      position: fixed;
      height: 100vh;
      width: 100%;
      top: 0;
      right: 100%;
      z-index: -1;
      visibility: hidden;
      opacity: 0;
    }
    .sidebar-body-overlay.active {
      visibility: visible;
      opacity: 1;
      z-index: 9;
      border-radius: 0;
      right: 0;
    }
  }
  .panel-sidebar {
    background: var(--white);
    text-align: center;
    padding: 0;
    border-radius: 20px;
    display: block;
    width: 280px;
    position: fixed;
    top: 20px;
    left: 20px;
  }
  .panel-sidebar.panel-sidebar2 {
    width: 490px;
    top: 90px;
    left: 24px;
  }
  @media (max-width: 991px) {
    .panel-sidebar.panel-sidebar2 {
      top: 80px;
    }
  }
  .panel-sidebar.panel-sidebar2 .close-sidebar {
    right: 4px;
    top: 3px;
  }
  .panel-sidebar .nicescroll-cursors {
    background-color: rgba(var(--primary-rgb), 0.2) !important;
    width: 3px !important;
    border: 0 !important;
  }
  @media (max-width: 991px) {
    .panel-sidebar {
      z-index: 1;
      position: absolute;
      left: -100%;
      visibility: hidden;
      opacity: 0;
      z-index: 99;
      display: block;
      -webkit-transition: all 0.5s;
      transition: all 0.5s;
    }
    .panel-sidebar.active {
      visibility: visible;
      opacity: 1;
      left: 0;
    }
  }
  .panel-sidebar .close-sidebar {
    position: absolute;
    -webkit-box-shadow: 0 0 10px rgba(221, 221, 221, 0.5);
    box-shadow: 0 0 10px rgba(221, 221, 221, 0.5);
    text-align: center;
    -webkit-transition: 0.4s;
    transition: 0.4s;
    right: 15px;
    z-index: 10;
    top: 15px;
    cursor: pointer;
    background: var(--tertiary);
    color: #ffffff;
    font-size: 13px;
    width: 20px;
    height: 20px;
    line-height: 20px;
    border-radius: 50%;
    border: 0;
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    display: none;
  }
  .panel-sidebar .close-sidebar:hover {
    background: #dc3545 !important;
    color: white;
    -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
  }
  @media (max-width: 991px) {
    .panel-sidebar .close-sidebar {
      display: block;
    }
  }

  .panel-sidebar-top .thumb {
    margin: 0 auto;
    padding: 17px 0;
  }

  .panel-pages {
    border-top: 1px solid var(--secondary-border);
    margin-bottom: 15px;
    text-align: left;
    padding-left: 27px;
    margin-top: 10px;
    padding-top: 5px;
  }
  .panel-pages .title {
    color: var(--tertiary);
    font-weight: 500;
    text-transform: capitalize;
    font-size: 12px;
  }

  /* Mobile Device sidebar open Icon */
  .panel-sidebar-icon {
    display: none;
  }
  @media (max-width: 991px) {
    .panel-sidebar-icon {
      display: block;
    }
  }
  .panel-sidebar-icon .sidebar-icon {
    cursor: pointer;
    background: var(--primary-title);
    border-radius: 5px;
    font-size: 23px;
    width: 42px;
    height: 42px;
    line-height: 43px;
    display: block;
    text-align: center;
    color: var(--white);
    margin-bottom: 10px;
    margin-right: 10px;
  }
  @media (max-width: 575px) {
    .panel-sidebar-icon .sidebar-icon {
      font-size: 21px;
      width: 36px;
      height: 36px;
      line-height: 36px;
    }
  }

  .slider-height {
    min-height: 400px;
    background-position: center center;
    background-size: cover;
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .slider-height {
      min-height: 300px;
    }
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .slider-height {
      min-height: 300px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .slider-height {
      min-height: 300px;
    }
  }
  @media (max-width: 575px) {
    .slider-height {
      min-height: 300px;
    }
  }

  .slider-height2 {
    min-height: 250px;
    background-position: center center;
    background-size: cover;
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .slider-height2 {
      min-height: 250px;
    }
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .slider-height2 {
      min-height: 250px;
    }
  }
  @media (max-width: 575px) {
    .slider-height2 {
      min-height: 250px;
    }
  }

  .hero-overly {
    position: relative;
    z-index: 0;
  }
  .hero-overly::before {
    position: absolute;
    content: "";
    background-color: rgba(10, 17, 25, 0.8);
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    z-index: -1;
    background-repeat: no-repeat;
  }

  @-webkit-keyframes action-bg {
    from {
      background-position: 0 0;
    }
    to {
      background-position: -1080px 0;
    }
  }

  @keyframes action-bg {
    from {
      background-position: 0 0;
    }
    to {
      background-position: -1080px 0;
    }
  }
  .hero-bg {
    min-height: 1100px;
    width: 100%;
    background-image: url("../images/hero.jpg");
    color: #ffffff;
    position: relative;
    text-align: center;
    -webkit-animation: action-bg 30s linear infinite;
            animation: action-bg 30s linear infinite;
    background-position: 0 0;
    background-repeat: repeat-x;
    z-index: 1;
  }
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .hero-bg {
      min-height: 900px;
      padding-top: 100px;
    }
  }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .hero-bg {
      min-height: 700px;
      padding-top: 50px;
    }
  }
  @media (max-width: 767px) {
    .hero-bg {
      min-height: 700px;
      padding-top: 50px;
    }
  }

  .sliderArea .slider-content {
    overflow: hidden;
  }
  .sliderArea .slider-content.slider-content .title {
    color: var(--white);
    font-size: 55px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 25px;
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .sliderArea .slider-content.slider-content .title {
      font-size: 30px;
    }
  }
  @media (max-width: 575px) {
    .sliderArea .slider-content.slider-content .title {
      font-size: 25px;
    }
  }
  .sliderArea .slider-content.slider-content .pera {
    font-size: 18px;
    font-weight: 500;
    color: var(--white);
    padding: 0;
    margin: 0;
  }
  .sliderArea .slider-content.slider-content2 .title {
    color: var(--white);
    font-size: 40px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 20px;
    font-family: var(--gabriela);
    text-transform: capitalize;
  }
  @media (max-width: 575px) {
    .sliderArea .slider-content.slider-content2 .title {
      font-size: 30px;
    }
  }
  .sliderArea .slider-content.slider-content2 .pera {
    font-size: 18px;
    font-weight: 500;
    color: var(--white);
    padding: 0;
    margin: 0;
    text-transform: capitalize;
  }
  @media (max-width: 575px) {
    .sliderArea .slider-content.slider-content2 .pera {
      font-size: 15px;
    }
  }

  .breadcrumb {
    background: none;
    padding: 0;
    margin: 0;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    margin-bottom: 5px;
  }
  .breadcrumb a {
    color: var(--primary-title);
    font-size: 18px;
    text-transform: capitalize;
    line-height: 1;
    font-weight: 400;
  }
  .breadcrumb .breadcrumb-item {
    line-height: 1;
  }
  .breadcrumb .breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    color: var(--primary-title);
    content: "\e649";
    font-family: "themify";
    font-size: 16px;
    padding: 0 0px;
    margin: 0 13px;
    font-weight: 600;
    position: relative;
    top: 3px;
    padding-right: 10px;
  }

  .tags span {
    background-color: var(--white);
    color: var(--primary-title);
    display: inline-block;
    margin: 0 5px 10px 0;
    padding: 5px 15px;
    border-radius: 30px;
    font-size: 14px;
    -webkit-transition: 0.3s;
    transition: 0.3s;
  }
  @media (max-width: 575px) {
    .tags span {
      margin: 0 3px 5px 0;
      padding: 3px 9px;
      font-size: 13px;
    }
  }

  :root {
    --bs-blue: #0d6efd;
    --bs-indigo: #6610f2;
    --bs-purple: #6f42c1;
    --bs-pink: #d63384;
    --bs-red: #dc3545;
    --bs-orange: #fd7e14;
    --bs-yellow: #ffc107;
    --bs-green: #198754;
    --bs-teal: #20c997;
    --bs-cyan: #0dcaf0;
    --bs-black: #000;
    --bs-white: #fff;
    --bs-gray: #6c757d;
    --bs-gray-dark: #343a40;
    --bs-gray-100: #f8f9fa;
    --bs-gray-200: #e9ecef;
    --bs-gray-300: #dee2e6;
    --bs-gray-400: #ced4da;
    --bs-gray-500: #adb5bd;
    --bs-gray-600: #6c757d;
    --bs-gray-700: #495057;
    --bs-gray-800: #343a40;
    --bs-gray-900: #212529;
    --bs-primary: #0d6efd;
    --bs-secondary: #6c757d;
    --bs-success: #198754;
    --bs-info: #0dcaf0;
    --bs-warning: #ffc107;
    --bs-danger: #dc3545;
    --bs-light: #f8f9fa;
    --bs-dark: #212529;
    --bs-primary-rgb: 13, 110, 253;
    --bs-secondary-rgb: 108, 117, 125;
    --bs-success-rgb: 25, 135, 84;
    --bs-info-rgb: 13, 202, 240;
    --bs-warning-rgb: 255, 193, 7;
    --bs-danger-rgb: 220, 53, 69;
    --bs-light-rgb: 248, 249, 250;
    --bs-dark-rgb: 33, 37, 41;
    --bs-primary-text: #0a58ca;
    --bs-secondary-text: #6c757d;
    --bs-success-text: #146c43;
    --bs-info-text: #087990;
    --bs-warning-text: #997404;
    --bs-danger-text: #b02a37;
    --bs-light-text: #6c757d;
    --bs-dark-text: #495057;
    --bs-primary-bg-subtle: #cfe2ff;
    --bs-secondary-bg-subtle: #f8f9fa;
    --bs-success-bg-subtle: #d1e7dd;
    --bs-info-bg-subtle: #cff4fc;
    --bs-warning-bg-subtle: #fff3cd;
    --bs-danger-bg-subtle: #f8d7da;
    --bs-light-bg-subtle: #fcfcfd;
    --bs-dark-bg-subtle: #ced4da;
    --bs-primary-border-subtle: #9ec5fe;
    --bs-secondary-border-subtle: #e9ecef;
    --bs-success-border-subtle: #a3cfbb;
    --bs-info-border-subtle: #9eeaf9;
    --bs-warning-border-subtle: #ffe69c;
    --bs-danger-border-subtle: #f1aeb5;
    --bs-light-border-subtle: #e9ecef;
    --bs-dark-border-subtle: #adb5bd;
    --bs-white-rgb: 255, 255, 255;
    --bs-black-rgb: 0, 0, 0;
    --bs-body-color-rgb: 33, 37, 41;
    --bs-body-bg-rgb: 255, 255, 255;
    --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
    --bs-body-font-family: var(--bs-font-sans-serif);
    --bs-body-font-size: 1rem;
    --bs-body-font-weight: 400;
    --bs-body-line-height: 1.5;
    --bs-body-color: #212529;
    --bs-emphasis-color: #000;
    --bs-emphasis-color-rgb: 0, 0, 0;
    --bs-secondary-color: rgba(33, 37, 41, 0.75);
    --bs-secondary-color-rgb: 33, 37, 41;
    --bs-secondary-bg: #e9ecef;
    --bs-secondary-bg-rgb: 233, 236, 239;
    --bs-tertiary-color: rgba(33, 37, 41, 0.5);
    --bs-tertiary-color-rgb: 33, 37, 41;
    --bs-tertiary-bg: #f8f9fa;
    --bs-tertiary-bg-rgb: 248, 249, 250;
    --bs-body-bg: #fff;
    --bs-body-bg-rgb: 255, 255, 255;
    --bs-link-color: #0d6efd;
    --bs-link-color-rgb: 13, 110, 253;
    --bs-link-decoration: underline;
    --bs-link-hover-color: #0a58ca;
    --bs-link-hover-color-rgb: 10, 88, 202;
    --bs-code-color: #d63384;
    --bs-highlight-bg: #fff3cd;
    --bs-border-width: 1px;
    --bs-border-style: solid;
    --bs-border-color: #dee2e6;
    --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
    --bs-border-radius: 0.375rem;
    --bs-border-radius-sm: 0.25rem;
    --bs-border-radius-lg: 0.5rem;
    --bs-border-radius-xl: 1rem;
    --bs-border-radius-2xl: 2rem;
    --bs-border-radius-pill: 50rem;
    --bs-box-shadow: 0 0.5rem 1rem rgba(var(--bs-body-color-rgb), 0.15);
    --bs-box-shadow-sm: 0 0.125rem 0.25rem rgba(var(--bs-body-color-rgb), 0.075);
    --bs-box-shadow-lg: 0 1rem 3rem rgba(var(--bs-body-color-rgb), 0.175);
    --bs-box-shadow-inset: inset 0 1px 2px rgba(var(--bs-body-color-rgb), 0.075);
    --bs-emphasis-color: #000;
    --bs-form-control-bg: var(--bs-body-bg);
    --bs-form-control-disabled-bg: var(--bs-secondary-bg);
    --bs-highlight-bg: #fff3cd;
    --bs-breakpoint-xs: 0;
    --bs-breakpoint-sm: 576px;
    --bs-breakpoint-md: 768px;
    --bs-breakpoint-lg: 992px;
    --bs-breakpoint-xl: 1200px;
    --bs-breakpoint-xxl: 1400px;
  }

  .container,
  .container-fluid,
  .container-lg,
  .container-md,
  .container-sm,
  .container-xl,
  .container-xxl {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    width: 100%;
    padding-right: calc(var(--bs-gutter-x) * 0.5);
    padding-left: calc(var(--bs-gutter-x) * 0.5);
    margin-right: auto;
    margin-left: auto;
  }

  @media (min-width: 576px) {
    .container,
    .container-sm {
      max-width: 540px;
    }
  }
  @media (min-width: 768px) {
    .container,
    .container-md,
    .container-sm {
      max-width: 720px;
    }
  }
  @media (min-width: 992px) {
    .container,
    .container-lg,
    .container-md,
    .container-sm {
      max-width: 960px;
    }
  }
  @media (min-width: 1200px) {
    .container,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl {
      max-width: 1140px;
    }
  }
  @media (min-width: 1400px) {
    .container,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl,
    .container-xxl {
      max-width: 1320px;
    }
  }
  .row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: calc(-0.5 * var(--bs-gutter-x));
    margin-left: calc(-0.5 * var(--bs-gutter-x));
  }

  .row > * {
    -ms-flex-negative: 0;
        flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) * 0.5);
    padding-left: calc(var(--bs-gutter-x) * 0.5);
    margin-top: var(--bs-gutter-y);
  }

  .col {
    -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
            flex: 1 0 0%;
  }

  .row-cols-auto > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .row-cols-1 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-2 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-3 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .row-cols-4 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-5 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-6 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .col-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 8.33333333%;
  }

  .col-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.66666667%;
  }

  .col-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .col-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.33333333%;
  }

  .col-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 41.66666667%;
  }

  .col-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .col-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 58.33333333%;
  }

  .col-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 66.66666667%;
  }

  .col-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 75%;
  }

  .col-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 83.33333333%;
  }

  .col-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 91.66666667%;
  }

  .col-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .offset-1 {
    margin-left: 8.33333333%;
  }

  .offset-2 {
    margin-left: 16.66666667%;
  }

  .offset-3 {
    margin-left: 25%;
  }

  .offset-4 {
    margin-left: 33.33333333%;
  }

  .offset-5 {
    margin-left: 41.66666667%;
  }

  .offset-6 {
    margin-left: 50%;
  }

  .offset-7 {
    margin-left: 58.33333333%;
  }

  .offset-8 {
    margin-left: 66.66666667%;
  }

  .offset-9 {
    margin-left: 75%;
  }

  .offset-10 {
    margin-left: 83.33333333%;
  }

  .offset-11 {
    margin-left: 91.66666667%;
  }

  .g-0,
  .gx-0 {
    --bs-gutter-x: 0;
  }

  .g-0,
  .gy-0 {
    --bs-gutter-y: 0;
  }

  @media (min-width: 576px) {
    .col-sm {
      -webkit-box-flex: 1;
          -ms-flex: 1 0 0%;
              flex: 1 0 0%;
    }
    .row-cols-sm-auto > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: auto;
    }
    .row-cols-sm-1 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 100%;
    }
    .row-cols-sm-2 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 50%;
    }
    .row-cols-sm-3 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 33.3333333333%;
    }
    .row-cols-sm-4 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 25%;
    }
    .row-cols-sm-5 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 20%;
    }
    .row-cols-sm-6 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 16.6666666667%;
    }
    .col-sm-auto {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: auto;
    }
    .col-sm-1 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 8.33333333%;
    }
    .col-sm-2 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 16.66666667%;
    }
    .col-sm-3 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 25%;
    }
    .col-sm-4 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 33.33333333%;
    }
    .col-sm-5 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 41.66666667%;
    }
    .col-sm-6 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 50%;
    }
    .col-sm-7 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 58.33333333%;
    }
    .col-sm-8 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 66.66666667%;
    }
    .col-sm-9 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 75%;
    }
    .col-sm-10 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 83.33333333%;
    }
    .col-sm-11 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 91.66666667%;
    }
    .col-sm-12 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 100%;
    }
    .offset-sm-0 {
      margin-left: 0;
    }
    .offset-sm-1 {
      margin-left: 8.33333333%;
    }
    .offset-sm-2 {
      margin-left: 16.66666667%;
    }
    .offset-sm-3 {
      margin-left: 25%;
    }
    .offset-sm-4 {
      margin-left: 33.33333333%;
    }
    .offset-sm-5 {
      margin-left: 41.66666667%;
    }
    .offset-sm-6 {
      margin-left: 50%;
    }
    .offset-sm-7 {
      margin-left: 58.33333333%;
    }
    .offset-sm-8 {
      margin-left: 66.66666667%;
    }
    .offset-sm-9 {
      margin-left: 75%;
    }
    .offset-sm-10 {
      margin-left: 83.33333333%;
    }
    .offset-sm-11 {
      margin-left: 91.66666667%;
    }
    .g-sm-0,
    .gx-sm-0 {
      --bs-gutter-x: 0;
    }
    .g-sm-0,
    .gy-sm-0 {
      --bs-gutter-y: 0;
    }
    .g-sm-1,
    .gx-sm-1 {
      --bs-gutter-x: 0.25rem;
    }
    .g-sm-1,
    .gy-sm-1 {
      --bs-gutter-y: 0.25rem;
    }
    .g-sm-2,
    .gx-sm-2 {
      --bs-gutter-x: 0.5rem;
    }
    .g-sm-2,
    .gy-sm-2 {
      --bs-gutter-y: 0.5rem;
    }
    .g-sm-3,
    .gx-sm-3 {
      --bs-gutter-x: 1rem;
    }
    .g-sm-3,
    .gy-sm-3 {
      --bs-gutter-y: 1rem;
    }
    .g-sm-4,
    .gx-sm-4 {
      --bs-gutter-x: 1.5rem;
    }
    .g-sm-4,
    .gy-sm-4 {
      --bs-gutter-y: 1.5rem;
    }
    .g-sm-5,
    .gx-sm-5 {
      --bs-gutter-x: 3rem;
    }
    .g-sm-5,
    .gy-sm-5 {
      --bs-gutter-y: 3rem;
    }
  }
  @media (min-width: 768px) {
    .col-md {
      -webkit-box-flex: 1;
          -ms-flex: 1 0 0%;
              flex: 1 0 0%;
    }
    .row-cols-md-auto > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: auto;
    }
    .row-cols-md-1 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 100%;
    }
    .row-cols-md-2 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 50%;
    }
    .row-cols-md-3 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 33.3333333333%;
    }
    .row-cols-md-4 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 25%;
    }
    .row-cols-md-5 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 20%;
    }
    .row-cols-md-6 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 16.6666666667%;
    }
    .col-md-auto {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: auto;
    }
    .col-md-1 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 8.33333333%;
    }
    .col-md-2 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 16.66666667%;
    }
    .col-md-3 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 25%;
    }
    .col-md-4 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 33.33333333%;
    }
    .col-md-5 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 41.66666667%;
    }
    /* .col-md-6 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 50%;
    } */
    .col-md-7 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 58.33333333%;
    }
    .col-md-8 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 66.66666667%;
    }
    .col-md-9 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 75%;
    }
    .col-md-10 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 83.33333333%;
    }
    .col-md-11 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 91.66666667%;
    }
    .col-md-12 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 100%;
    }
    .offset-md-0 {
      margin-left: 0;
    }
    .offset-md-1 {
      margin-left: 8.33333333%;
    }
    .offset-md-2 {
      margin-left: 16.66666667%;
    }
    .offset-md-3 {
      margin-left: 25%;
    }
    .offset-md-4 {
      margin-left: 33.33333333%;
    }
    .offset-md-5 {
      margin-left: 41.66666667%;
    }
    .offset-md-6 {
      margin-left: 50%;
    }
    .offset-md-7 {
      margin-left: 58.33333333%;
    }
    .offset-md-8 {
      margin-left: 66.66666667%;
    }
    .offset-md-9 {
      margin-left: 75%;
    }
    .offset-md-10 {
      margin-left: 83.33333333%;
    }
    .offset-md-11 {
      margin-left: 91.66666667%;
    }
    .g-md-0,
    .gx-md-0 {
      --bs-gutter-x: 0;
    }
    .g-md-0,
    .gy-md-0 {
      --bs-gutter-y: 0;
    }
    .g-md-1,
    .gx-md-1 {
      --bs-gutter-x: 0.25rem;
    }
    .g-md-1,
    .gy-md-1 {
      --bs-gutter-y: 0.25rem;
    }
    .g-md-2,
    .gx-md-2 {
      --bs-gutter-x: 0.5rem;
    }
    .g-md-2,
    .gy-md-2 {
      --bs-gutter-y: 0.5rem;
    }
    .g-md-3,
    .gx-md-3 {
      --bs-gutter-x: 1rem;
    }
    .g-md-3,
    .gy-md-3 {
      --bs-gutter-y: 1rem;
    }
    .g-md-4,
    .gx-md-4 {
      --bs-gutter-x: 1.5rem;
    }
    .g-md-4,
    .gy-md-4 {
      --bs-gutter-y: 1.5rem;
    }
    .g-md-5,
    .gx-md-5 {
      --bs-gutter-x: 3rem;
    }
    .g-md-5,
    .gy-md-5 {
      --bs-gutter-y: 3rem;
    }
  }
  @media (min-width: 992px) {
    .col-lg {
      -webkit-box-flex: 1;
          -ms-flex: 1 0 0%;
              flex: 1 0 0%;
    }
    .row-cols-lg-auto > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: auto;
    }
    .row-cols-lg-1 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 100%;
    }
    .row-cols-lg-2 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 50%;
    }
    .row-cols-lg-3 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 33.3333333333%;
    }
    .row-cols-lg-4 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 25%;
    }
    .row-cols-lg-5 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 20%;
    }
    .row-cols-lg-6 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 16.6666666667%;
    }
    .col-lg-auto {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: auto;
    }
    .col-lg-1 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 8.33333333%;
    }
    .col-lg-2 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 16.66666667%;
    }
    .col-lg-3 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 25%;
    }
    .col-lg-4 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 33.33333333%;
    }
    .col-lg-5 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 41.66666667%;
    }
    .col-lg-6 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 50%;
    }
    .col-lg-7 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 58.33333333%;
    }
    .col-lg-8 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 66.66666667%;
    }
    .col-lg-9 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 75%;
    }
    .col-lg-10 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 83.33333333%;
    }
    .col-lg-11 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 91.66666667%;
    }
    .col-lg-12 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 100%;
    }
    .offset-lg-0 {
      margin-left: 0;
    }
    .offset-lg-1 {
      margin-left: 8.33333333%;
    }
    .offset-lg-2 {
      margin-left: 16.66666667%;
    }
    .offset-lg-3 {
      margin-left: 25%;
    }
    .offset-lg-4 {
      margin-left: 33.33333333%;
    }
    .offset-lg-5 {
      margin-left: 41.66666667%;
    }
    .offset-lg-6 {
      margin-left: 50%;
    }
    .offset-lg-7 {
      margin-left: 58.33333333%;
    }
    .offset-lg-8 {
      margin-left: 66.66666667%;
    }
    .offset-lg-9 {
      margin-left: 75%;
    }
    .offset-lg-10 {
      margin-left: 83.33333333%;
    }
    .offset-lg-11 {
      margin-left: 91.66666667%;
    }
    .g-lg-0,
    .gx-lg-0 {
      --bs-gutter-x: 0;
    }
    .g-lg-0,
    .gy-lg-0 {
      --bs-gutter-y: 0;
    }
    .g-lg-1,
    .gx-lg-1 {
      --bs-gutter-x: 0.25rem;
    }
    .g-lg-1,
    .gy-lg-1 {
      --bs-gutter-y: 0.25rem;
    }
    .g-lg-2,
    .gx-lg-2 {
      --bs-gutter-x: 0.5rem;
    }
    .g-lg-2,
    .gy-lg-2 {
      --bs-gutter-y: 0.5rem;
    }
    .g-lg-3,
    .gx-lg-3 {
      --bs-gutter-x: 1rem;
    }
    .g-lg-3,
    .gy-lg-3 {
      --bs-gutter-y: 1rem;
    }
    .g-lg-4,
    .gx-lg-4 {
      --bs-gutter-x: 1.5rem;
    }
    .g-lg-4,
    .gy-lg-4 {
      --bs-gutter-y: 1.5rem;
    }
    .g-lg-5,
    .gx-lg-5 {
      --bs-gutter-x: 3rem;
    }
    .g-lg-5,
    .gy-lg-5 {
      --bs-gutter-y: 3rem;
    }
  }
  @media (min-width: 1200px) {
    .col-xl {
      -webkit-box-flex: 1;
          -ms-flex: 1 0 0%;
              flex: 1 0 0%;
    }
    .row-cols-xl-auto > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: auto;
    }
    .row-cols-xl-1 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 100%;
    }
    .row-cols-xl-2 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 50%;
    }
    .row-cols-xl-3 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 33.3333333333%;
    }
    .row-cols-xl-4 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 25%;
    }
    .row-cols-xl-5 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 20%;
    }
    .row-cols-xl-6 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 16.6666666667%;
    }
    .col-xl-auto {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: auto;
    }
    .col-xl-1 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 8.33333333%;
    }
    .col-xl-2 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 16.66666667%;
    }
    .col-xl-3 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 25%;
    }
    .col-xl-4 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 33.33333333%;
    }
    .col-xl-5 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 41.66666667%;
    }
    .col-xl-6 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 50%;
    }
    .col-xl-7 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 58.33333333%;
    }
    .col-xl-8 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 66.66666667%;
    }
    .col-xl-9 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 75%;
    }
    .col-xl-10 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 83.33333333%;
    }
    .col-xl-11 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 91.66666667%;
    }
    .col-xl-12 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 100%;
    }
    .offset-xl-0 {
      margin-left: 0;
    }
    .offset-xl-1 {
      margin-left: 8.33333333%;
    }
    .offset-xl-2 {
      margin-left: 16.66666667%;
    }
    .offset-xl-3 {
      margin-left: 25%;
    }
    .offset-xl-4 {
      margin-left: 33.33333333%;
    }
    .offset-xl-5 {
      margin-left: 41.66666667%;
    }
    .offset-xl-6 {
      margin-left: 50%;
    }
    .offset-xl-7 {
      margin-left: 58.33333333%;
    }
    .offset-xl-8 {
      margin-left: 66.66666667%;
    }
    .offset-xl-9 {
      margin-left: 75%;
    }
    .offset-xl-10 {
      margin-left: 83.33333333%;
    }
    .offset-xl-11 {
      margin-left: 91.66666667%;
    }
    .g-xl-0,
    .gx-xl-0 {
      --bs-gutter-x: 0;
    }
    .g-xl-0,
    .gy-xl-0 {
      --bs-gutter-y: 0;
    }
    .g-xl-1,
    .gx-xl-1 {
      --bs-gutter-x: 0.25rem;
    }
    .g-xl-1,
    .gy-xl-1 {
      --bs-gutter-y: 0.25rem;
    }
    .g-xl-2,
    .gx-xl-2 {
      --bs-gutter-x: 0.5rem;
    }
    .g-xl-2,
    .gy-xl-2 {
      --bs-gutter-y: 0.5rem;
    }
    .g-xl-3,
    .gx-xl-3 {
      --bs-gutter-x: 1rem;
    }
    .g-xl-3,
    .gy-xl-3 {
      --bs-gutter-y: 1rem;
    }
    .g-xl-4,
    .gx-xl-4 {
      --bs-gutter-x: 1.5rem;
    }
    .g-xl-4,
    .gy-xl-4 {
      --bs-gutter-y: 1.5rem;
    }
    .g-xl-5,
    .gx-xl-5 {
      --bs-gutter-x: 3rem;
    }
    .g-xl-5,
    .gy-xl-5 {
      --bs-gutter-y: 3rem;
    }
  }
  @media (min-width: 1400px) {
    .col-xxl {
      -webkit-box-flex: 1;
          -ms-flex: 1 0 0%;
              flex: 1 0 0%;
    }
    .row-cols-xxl-auto > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: auto;
    }
    .row-cols-xxl-1 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 100%;
    }
    .row-cols-xxl-2 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 50%;
    }
    .row-cols-xxl-3 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 33.3333333333%;
    }
    .row-cols-xxl-4 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 25%;
    }
    .row-cols-xxl-5 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 20%;
    }
    .row-cols-xxl-6 > * {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 16.6666666667%;
    }
    .col-xxl-auto {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: auto;
    }
    .col-xxl-1 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 8.33333333%;
    }
    .col-xxl-2 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 16.66666667%;
    }
    .col-xxl-3 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 25%;
    }
    .col-xxl-4 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 33.33333333%;
    }
    .col-xxl-5 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 41.66666667%;
    }
    .col-xxl-6 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 50%;
    }
    .col-xxl-7 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 58.33333333%;
    }
    .col-xxl-8 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 66.66666667%;
    }
    .col-xxl-9 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 75%;
    }
    .col-xxl-10 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 83.33333333%;
    }
    .col-xxl-11 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 91.66666667%;
    }
    .col-xxl-12 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 100%;
    }
    .offset-xxl-0 {
      margin-left: 0;
    }
    .offset-xxl-1 {
      margin-left: 8.33333333%;
    }
    .offset-xxl-2 {
      margin-left: 16.66666667%;
    }
    .offset-xxl-3 {
      margin-left: 25%;
    }
    .offset-xxl-4 {
      margin-left: 33.33333333%;
    }
    .offset-xxl-5 {
      margin-left: 41.66666667%;
    }
    .offset-xxl-6 {
      margin-left: 50%;
    }
    .offset-xxl-7 {
      margin-left: 58.33333333%;
    }
    .offset-xxl-8 {
      margin-left: 66.66666667%;
    }
    .offset-xxl-9 {
      margin-left: 75%;
    }
    .offset-xxl-10 {
      margin-left: 83.33333333%;
    }
    .offset-xxl-11 {
      margin-left: 91.66666667%;
    }
    .g-xxl-0,
    .gx-xxl-0 {
      --bs-gutter-x: 0;
    }
    .g-xxl-0,
    .gy-xxl-0 {
      --bs-gutter-y: 0;
    }
    .g-xxl-1,
    .gx-xxl-1 {
      --bs-gutter-x: 0.25rem;
    }
    .g-xxl-1,
    .gy-xxl-1 {
      --bs-gutter-y: 0.25rem;
    }
    .g-xxl-2,
    .gx-xxl-2 {
      --bs-gutter-x: 0.5rem;
    }
    .g-xxl-2,
    .gy-xxl-2 {
      --bs-gutter-y: 0.5rem;
    }
    .g-xxl-3,
    .gx-xxl-3 {
      --bs-gutter-x: 1rem;
    }
    .g-xxl-3,
    .gy-xxl-3 {
      --bs-gutter-y: 1rem;
    }
    .g-xxl-4,
    .gx-xxl-4 {
      --bs-gutter-x: 1.5rem;
    }
    .g-xxl-4,
    .gy-xxl-4 {
      --bs-gutter-y: 1.5rem;
    }
    .g-xxl-5,
    .gx-xxl-5 {
      --bs-gutter-x: 3rem;
    }
    .g-xxl-5,
    .gy-xxl-5 {
      --bs-gutter-y: 3rem;
    }
  }
  .table {
    --bs-table-color: var(--bs-body-color);
    --bs-table-bg: transparent;
    --bs-table-border-color: var(--bs-border-color);
    --bs-table-accent-bg: transparent;
    --bs-table-striped-color: var(--bs-body-color);
    --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
    --bs-table-active-color: var(--bs-body-color);
    --bs-table-active-bg: rgba(0, 0, 0, 0.1);
    --bs-table-hover-color: var(--bs-body-color);
    --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
    width: 100%;
    margin-bottom: 1rem;
    color: var(--bs-table-color);
    vertical-align: top;
    border-color: var(--bs-table-border-color);
  }

  table {
    caption-side: bottom;
    border-collapse: collapse;
  }

  caption {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    color: var(--bs-secondary-color);
    text-align: left;
  }

  th {
    text-align: inherit;
    text-align: -webkit-match-parent;
  }

  tbody,
  td,
  tfoot,
  th,
  thead,
  tr {
    border-color: inherit;
    border-style: solid;
    border-width: 0;
  }

  label {
    display: inline-block;
  }

  .table > :not(caption) > * > * {
    padding: 0.5rem 0.5rem;
    background-color: var(--bs-table-bg);
    border-bottom-width: var(--bs-border-width);
    -webkit-box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
  }

  .table > tbody {
    vertical-align: inherit;
  }

  .table > thead {
    vertical-align: bottom;
  }

  .table-group-divider {
    border-top: calc(var(--bs-border-width) * 2) solid currentcolor;
  }

  .caption-top {
    caption-side: top;
  }

  .table-sm > :not(caption) > * > * {
    padding: 0.25rem 0.25rem;
  }

  .table-bordered > :not(caption) > * {
    border-width: var(--bs-border-width) 0;
  }

  .table-bordered > :not(caption) > * > * {
    border-width: 0 var(--bs-border-width);
  }

  .table-borderless > :not(caption) > * > * {
    border-bottom-width: 0;
  }

  .table-borderless > :not(:first-child) {
    border-top-width: 0;
  }

  .table-striped > tbody > tr:nth-of-type(odd) > * {
    --bs-table-accent-bg: var(--bs-table-striped-bg);
    color: var(--bs-table-striped-color);
  }

  .table-striped-columns > :not(caption) > tr > :nth-child(2n) {
    --bs-table-accent-bg: var(--bs-table-striped-bg);
    color: var(--bs-table-striped-color);
  }

  .table-active {
    --bs-table-accent-bg: var(--bs-table-active-bg);
    color: var(--bs-table-active-color);
  }

  .table-hover > tbody > tr:hover > * {
    --bs-table-accent-bg: var(--bs-table-hover-bg);
    color: var(--bs-table-hover-color);
  }

  .table-primary {
    --bs-table-color: #000;
    --bs-table-bg: #cfe2ff;
    --bs-table-border-color: #bacbe6;
    --bs-table-striped-bg: #c5d7f2;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #bacbe6;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #bfd1ec;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
  }

  .table-secondary {
    --bs-table-color: #000;
    --bs-table-bg: #e2e3e5;
    --bs-table-border-color: #cbccce;
    --bs-table-striped-bg: #d7d8da;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #cbccce;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #d1d2d4;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
  }

  .table-success {
    --bs-table-color: #000;
    --bs-table-bg: #d1e7dd;
    --bs-table-border-color: #bcd0c7;
    --bs-table-striped-bg: #c7dbd2;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #bcd0c7;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #c1d6cc;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
  }

  .table-info {
    --bs-table-color: #000;
    --bs-table-bg: #cff4fc;
    --bs-table-border-color: #badce3;
    --bs-table-striped-bg: #c5e8ef;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #badce3;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #bfe2e9;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
  }

  .table-warning {
    --bs-table-color: #000;
    --bs-table-bg: #fff3cd;
    --bs-table-border-color: #e6dbb9;
    --bs-table-striped-bg: #f2e7c3;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #e6dbb9;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #ece1be;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
  }

  .table-danger {
    --bs-table-color: #000;
    --bs-table-bg: #f8d7da;
    --bs-table-border-color: #dfc2c4;
    --bs-table-striped-bg: #eccccf;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #dfc2c4;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #e5c7ca;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
  }

  .table-light {
    --bs-table-color: #000;
    --bs-table-bg: #f8f9fa;
    --bs-table-border-color: #dfe0e1;
    --bs-table-striped-bg: #ecedee;
    --bs-table-striped-color: #000;
    --bs-table-active-bg: #dfe0e1;
    --bs-table-active-color: #000;
    --bs-table-hover-bg: #e5e6e7;
    --bs-table-hover-color: #000;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
  }

  .table-dark {
    --bs-table-color: #fff;
    --bs-table-bg: #212529;
    --bs-table-border-color: #373b3e;
    --bs-table-striped-bg: #2c3034;
    --bs-table-striped-color: #fff;
    --bs-table-active-bg: #373b3e;
    --bs-table-active-color: #fff;
    --bs-table-hover-bg: #323539;
    --bs-table-hover-color: #fff;
    color: var(--bs-table-color);
    border-color: var(--bs-table-border-color);
  }

  .table-responsive {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }

  @media (max-width: 575.98px) {
    .table-responsive-sm {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }
  }
  @media (max-width: 767.98px) {
    .table-responsive-md {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }
  }
  @media (max-width: 991.98px) {
    .table-responsive-lg {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }
  }
  @media (max-width: 1199.98px) {
    .table-responsive-xl {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }
  }
  @media (max-width: 1399.98px) {
    .table-responsive-xxl {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }
  }
  .card {
    --bs-card-spacer-y: 1rem;
    --bs-card-spacer-x: 1rem;
    --bs-card-title-spacer-y: 0.5rem;
    --bs-card-title-color: ;
    --bs-card-subtitle-color: ;
    --bs-card-border-width: var(--bs-border-width);
    --bs-card-border-color: var(--bs-border-color-translucent);
    --bs-card-border-radius: var(--bs-border-radius);
    --bs-card-box-shadow: ;
    --bs-card-inner-border-radius: calc(var(--bs-border-radius) - (var(--bs-border-width)));
    --bs-card-cap-padding-y: 0.5rem;
    --bs-card-cap-padding-x: 1rem;
    --bs-card-cap-bg: rgba(var(--bs-body-color-rgb), 0.03);
    --bs-card-cap-color: ;
    --bs-card-height: ;
    --bs-card-color: ;
    --bs-card-bg: var(--bs-body-bg);
    --bs-card-img-overlay-padding: 1rem;
    --bs-card-group-margin: 0.75rem;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    min-width: 0;
    height: var(--bs-card-height);
    word-wrap: break-word;
    background-color: var(--bs-card-bg);
    background-clip: border-box;
    border: var(--bs-card-border-width) solid var(--bs-card-border-color);
    border-radius: var(--bs-card-border-radius);
  }

  .border-bottom-0 {
    border-bottom: 0 !important;
  }

  .text-start {
    text-align: left !important;
  }

  .text-end {
    text-align: right !important;
  }

  .text-center {
    text-align: center !important;
  }

  .text-decoration-none {
    text-decoration: none !important;
  }

  address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit;
    line-height: 1.4;
  }

  .d-inline {
    display: inline !important;
  }

  .d-inline-block {
    display: inline-block !important;
  }

  .d-block {
    display: block !important;
  }

  .h-100 {
    height: 100% !important;
  }

  .h-auto {
    height: auto !important;
  }

  .mh-100 {
    max-height: 100% !important;
  }

  .vh-100 {
    height: 100vh !important;
  }

  .min-vh-100 {
    min-height: 100vh !important;
  }

  .mb-0 {
    margin-bottom: 0 !important;
  }

  .mb-1 {
    margin-bottom: 0.25rem !important;
  }

  .mb-2 {
    margin-bottom: 0.5rem !important;
  }

  .mb-3 {
    margin-bottom: 1rem !important;
  }

  .mb-4 {
    margin-bottom: 1.5rem !important;
  }

  .mb-5 {
    margin-bottom: 3rem !important;
  }

  .d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
  }

  .d-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }

  .d-none {
    display: none !important;
  }

  .flex-fill {
    -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
  }

  .flex-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
            flex-direction: row !important;
  }

  .flex-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
            flex-direction: column !important;
  }

  .flex-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
  }

  .flex-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
  }

  .flex-grow-0 {
    -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
  }

  .flex-grow-1 {
    -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
  }

  .flex-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
  }

  .flex-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
  }

  .flex-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
  }

  .flex-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
  }

  .flex-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
  }

  .justify-content-start {
    -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
            justify-content: flex-start !important;
  }

  .justify-content-end {
    -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
            justify-content: flex-end !important;
  }

  .justify-content-center {
    -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
            justify-content: center !important;
  }

  .justify-content-between {
    -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
            justify-content: space-between !important;
  }

  .justify-content-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
  }

  .justify-content-evenly {
    -webkit-box-pack: space-evenly !important;
        -ms-flex-pack: space-evenly !important;
            justify-content: space-evenly !important;
  }

  .align-items-start {
    -webkit-box-align: start !important;
        -ms-flex-align: start !important;
            align-items: flex-start !important;
  }

  .align-items-end {
    -webkit-box-align: end !important;
        -ms-flex-align: end !important;
            align-items: flex-end !important;
  }

  .align-items-center {
    -webkit-box-align: center !important;
        -ms-flex-align: center !important;
            align-items: center !important;
  }

  .align-items-baseline {
    -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
            align-items: baseline !important;
  }

  .align-items-stretch {
    -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
            align-items: stretch !important;
  }

  .align-content-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
  }

  .align-content-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
  }

  .align-content-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important;
  }

  .align-content-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
  }

  .align-content-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
  }

  .align-content-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
  }

  .align-self-auto {
    -ms-flex-item-align: auto !important;
        -ms-grid-row-align: auto !important;
        align-self: auto !important;
  }

  .align-self-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important;
  }

  .align-self-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important;
  }

  .align-self-center {
    -ms-flex-item-align: center !important;
        -ms-grid-row-align: center !important;
        align-self: center !important;
  }

  .align-self-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
  }

  .align-self-stretch {
    -ms-flex-item-align: stretch !important;
        -ms-grid-row-align: stretch !important;
        align-self: stretch !important;
  }

  @media (min-width: 576px) {
    .text-sm-start {
      text-align: left !important;
    }
  }
  @media (min-width: 576px) {
    .mb-sm-0 {
      margin-bottom: 0 !important;
    }
  }
  @media (min-width: 1200px) {
    .col-xl-6 {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 auto;
              flex: 0 0 auto;
      width: 50%;
    }
  }
  @media (max-width: 576px) {
    .table > :not(caption) > * > * {
      min-width: 120px;
    }
  }
  @media (min-width: 576px) {
    .float-sm-start {
      float: left !important;
    }
    .float-sm-end {
      float: right !important;
    }
    .float-sm-none {
      float: none !important;
    }
    .object-fit-sm-contain {
      -o-object-fit: contain !important;
      object-fit: contain !important;
    }
    .object-fit-sm-cover {
      -o-object-fit: cover !important;
      object-fit: cover !important;
    }
    .object-fit-sm-fill {
      -o-object-fit: fill !important;
      object-fit: fill !important;
    }
    .object-fit-sm-scale {
      -o-object-fit: scale-down !important;
      object-fit: scale-down !important;
    }
    .object-fit-sm-none {
      -o-object-fit: none !important;
      object-fit: none !important;
    }
    .d-sm-inline {
      display: inline !important;
    }
    .d-sm-inline-block {
      display: inline-block !important;
    }
    .d-sm-block {
      display: block !important;
    }
    .d-sm-grid {
      display: -ms-grid !important;
      display: grid !important;
    }
    .d-sm-table {
      display: table !important;
    }
    .d-sm-table-row {
      display: table-row !important;
    }
    .d-sm-table-cell {
      display: table-cell !important;
    }
    .d-sm-flex {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
    }
    .d-sm-inline-flex {
      display: -webkit-inline-box !important;
      display: -ms-inline-flexbox !important;
      display: inline-flex !important;
    }
    .d-sm-none {
      display: none !important;
    }
    .flex-sm-fill {
      -webkit-box-flex: 1 !important;
          -ms-flex: 1 1 auto !important;
              flex: 1 1 auto !important;
    }
    .flex-sm-row {
      -webkit-box-orient: horizontal !important;
      -webkit-box-direction: normal !important;
          -ms-flex-direction: row !important;
              flex-direction: row !important;
    }
    .flex-sm-column {
      -webkit-box-orient: vertical !important;
      -webkit-box-direction: normal !important;
          -ms-flex-direction: column !important;
              flex-direction: column !important;
    }
    .flex-sm-row-reverse {
      -webkit-box-orient: horizontal !important;
      -webkit-box-direction: reverse !important;
          -ms-flex-direction: row-reverse !important;
              flex-direction: row-reverse !important;
    }
    .flex-sm-column-reverse {
      -webkit-box-orient: vertical !important;
      -webkit-box-direction: reverse !important;
          -ms-flex-direction: column-reverse !important;
              flex-direction: column-reverse !important;
    }
    .flex-sm-grow-0 {
      -webkit-box-flex: 0 !important;
          -ms-flex-positive: 0 !important;
              flex-grow: 0 !important;
    }
    .flex-sm-grow-1 {
      -webkit-box-flex: 1 !important;
          -ms-flex-positive: 1 !important;
              flex-grow: 1 !important;
    }
    .flex-sm-shrink-0 {
      -ms-flex-negative: 0 !important;
          flex-shrink: 0 !important;
    }
    .flex-sm-shrink-1 {
      -ms-flex-negative: 1 !important;
          flex-shrink: 1 !important;
    }
    .flex-sm-wrap {
      -ms-flex-wrap: wrap !important;
          flex-wrap: wrap !important;
    }
    .flex-sm-nowrap {
      -ms-flex-wrap: nowrap !important;
          flex-wrap: nowrap !important;
    }
    .flex-sm-wrap-reverse {
      -ms-flex-wrap: wrap-reverse !important;
          flex-wrap: wrap-reverse !important;
    }
    .justify-content-sm-start {
      -webkit-box-pack: start !important;
          -ms-flex-pack: start !important;
              justify-content: flex-start !important;
    }
    .justify-content-sm-end {
      -webkit-box-pack: end !important;
          -ms-flex-pack: end !important;
              justify-content: flex-end !important;
    }
    .justify-content-sm-center {
      -webkit-box-pack: center !important;
          -ms-flex-pack: center !important;
              justify-content: center !important;
    }
    .justify-content-sm-between {
      -webkit-box-pack: justify !important;
          -ms-flex-pack: justify !important;
              justify-content: space-between !important;
    }
    .justify-content-sm-around {
      -ms-flex-pack: distribute !important;
          justify-content: space-around !important;
    }
    .justify-content-sm-evenly {
      -webkit-box-pack: space-evenly !important;
          -ms-flex-pack: space-evenly !important;
              justify-content: space-evenly !important;
    }
    .align-items-sm-start {
      -webkit-box-align: start !important;
          -ms-flex-align: start !important;
              align-items: flex-start !important;
    }
    .align-items-sm-end {
      -webkit-box-align: end !important;
          -ms-flex-align: end !important;
              align-items: flex-end !important;
    }
    .align-items-sm-center {
      -webkit-box-align: center !important;
          -ms-flex-align: center !important;
              align-items: center !important;
    }
    .align-items-sm-baseline {
      -webkit-box-align: baseline !important;
          -ms-flex-align: baseline !important;
              align-items: baseline !important;
    }
    .align-items-sm-stretch {
      -webkit-box-align: stretch !important;
          -ms-flex-align: stretch !important;
              align-items: stretch !important;
    }
    .align-content-sm-start {
      -ms-flex-line-pack: start !important;
          align-content: flex-start !important;
    }
    .align-content-sm-end {
      -ms-flex-line-pack: end !important;
          align-content: flex-end !important;
    }
    .align-content-sm-center {
      -ms-flex-line-pack: center !important;
          align-content: center !important;
    }
    .align-content-sm-between {
      -ms-flex-line-pack: justify !important;
          align-content: space-between !important;
    }
    .align-content-sm-around {
      -ms-flex-line-pack: distribute !important;
          align-content: space-around !important;
    }
    .align-content-sm-stretch {
      -ms-flex-line-pack: stretch !important;
          align-content: stretch !important;
    }
    .align-self-sm-auto {
      -ms-flex-item-align: auto !important;
          -ms-grid-row-align: auto !important;
          align-self: auto !important;
    }
    .align-self-sm-start {
      -ms-flex-item-align: start !important;
          align-self: flex-start !important;
    }
    .align-self-sm-end {
      -ms-flex-item-align: end !important;
          align-self: flex-end !important;
    }
    .align-self-sm-center {
      -ms-flex-item-align: center !important;
          -ms-grid-row-align: center !important;
          align-self: center !important;
    }
    .align-self-sm-baseline {
      -ms-flex-item-align: baseline !important;
          align-self: baseline !important;
    }
    .align-self-sm-stretch {
      -ms-flex-item-align: stretch !important;
          -ms-grid-row-align: stretch !important;
          align-self: stretch !important;
    }
    .order-sm-first {
      -webkit-box-ordinal-group: 0 !important;
          -ms-flex-order: -1 !important;
              order: -1 !important;
    }
    .order-sm-0 {
      -webkit-box-ordinal-group: 1 !important;
          -ms-flex-order: 0 !important;
              order: 0 !important;
    }
    .order-sm-1 {
      -webkit-box-ordinal-group: 2 !important;
          -ms-flex-order: 1 !important;
              order: 1 !important;
    }
    .order-sm-2 {
      -webkit-box-ordinal-group: 3 !important;
          -ms-flex-order: 2 !important;
              order: 2 !important;
    }
    .order-sm-3 {
      -webkit-box-ordinal-group: 4 !important;
          -ms-flex-order: 3 !important;
              order: 3 !important;
    }
    .order-sm-4 {
      -webkit-box-ordinal-group: 5 !important;
          -ms-flex-order: 4 !important;
              order: 4 !important;
    }
    .order-sm-5 {
      -webkit-box-ordinal-group: 6 !important;
          -ms-flex-order: 5 !important;
              order: 5 !important;
    }
    .order-sm-last {
      -webkit-box-ordinal-group: 7 !important;
          -ms-flex-order: 6 !important;
              order: 6 !important;
    }
    .m-sm-0 {
      margin: 0 !important;
    }
    .m-sm-1 {
      margin: 0.25rem !important;
    }
    .m-sm-2 {
      margin: 0.5rem !important;
    }
    .m-sm-3 {
      margin: 1rem !important;
    }
    .m-sm-4 {
      margin: 1.5rem !important;
    }
    .m-sm-5 {
      margin: 3rem !important;
    }
    .m-sm-auto {
      margin: auto !important;
    }
    .mx-sm-0 {
      margin-right: 0 !important;
      margin-left: 0 !important;
    }
    .mx-sm-1 {
      margin-right: 0.25rem !important;
      margin-left: 0.25rem !important;
    }
    .mx-sm-2 {
      margin-right: 0.5rem !important;
      margin-left: 0.5rem !important;
    }
    .mx-sm-3 {
      margin-right: 1rem !important;
      margin-left: 1rem !important;
    }
    .mx-sm-4 {
      margin-right: 1.5rem !important;
      margin-left: 1.5rem !important;
    }
    .mx-sm-5 {
      margin-right: 3rem !important;
      margin-left: 3rem !important;
    }
    .mx-sm-auto {
      margin-right: auto !important;
      margin-left: auto !important;
    }
    .my-sm-0 {
      margin-top: 0 !important;
      margin-bottom: 0 !important;
    }
    .my-sm-1 {
      margin-top: 0.25rem !important;
      margin-bottom: 0.25rem !important;
    }
    .my-sm-2 {
      margin-top: 0.5rem !important;
      margin-bottom: 0.5rem !important;
    }
    .my-sm-3 {
      margin-top: 1rem !important;
      margin-bottom: 1rem !important;
    }
    .my-sm-4 {
      margin-top: 1.5rem !important;
      margin-bottom: 1.5rem !important;
    }
    .my-sm-5 {
      margin-top: 3rem !important;
      margin-bottom: 3rem !important;
    }
    .my-sm-auto {
      margin-top: auto !important;
      margin-bottom: auto !important;
    }
    .mt-5 {
      margin-top: 10rem !important;
    }
    .mt-sm-0 {
      margin-top: 0 !important;
    }
    .mt-sm-1 {
      margin-top: 0.25rem !important;
    }
    .mt-sm-2 {
      margin-top: 0.5rem !important;
    }
    .mt-sm-3 {
      margin-top: 1rem !important;
    }
    .mt-sm-4 {
      margin-top: 1.5rem !important;
    }
    .mt-sm-5 {
      margin-top: 3rem !important;
    }
    .mt-sm-auto {
      margin-top: auto !important;
    }
    .me-sm-0 {
      margin-right: 0 !important;
    }
    .me-sm-1 {
      margin-right: 0.25rem !important;
    }
    .me-sm-2 {
      margin-right: 0.5rem !important;
    }
    .me-sm-3 {
      margin-right: 1rem !important;
    }
    .me-sm-4 {
      margin-right: 1.5rem !important;
    }
    .me-sm-5 {
      margin-right: 3rem !important;
    }
    .me-sm-auto {
      margin-right: auto !important;
    }
    .mb-sm-0 {
      margin-bottom: 0 !important;
    }
    .mb-sm-1 {
      margin-bottom: 0.25rem !important;
    }
    .mb-sm-2 {
      margin-bottom: 0.5rem !important;
    }
    .mb-sm-3 {
      margin-bottom: 1rem !important;
    }
    .mb-sm-4 {
      margin-bottom: 1.5rem !important;
    }
    .mb-sm-5 {
      margin-bottom: 3rem !important;
    }
    .mb-sm-auto {
      margin-bottom: auto !important;
    }
    .ms-sm-0 {
      margin-left: 0 !important;
    }
    .ms-sm-1 {
      margin-left: 0.25rem !important;
    }
    .ms-sm-2 {
      margin-left: 0.5rem !important;
    }
    .ms-sm-3 {
      margin-left: 1rem !important;
    }
    .ms-sm-4 {
      margin-left: 1.5rem !important;
    }
    .ms-sm-5 {
      margin-left: 3rem !important;
    }
    .ms-sm-auto {
      margin-left: auto !important;
    }
    .p-sm-0 {
      padding: 0 !important;
    }
    .p-sm-1 {
      padding: 0.25rem !important;
    }
    .p-sm-2 {
      padding: 0.5rem !important;
    }
    .p-sm-3 {
      padding: 1rem !important;
    }
    .p-sm-4 {
      padding: 1.5rem !important;
    }
    .p-sm-5 {
      padding: 3rem !important;
    }
    .px-sm-0 {
      padding-right: 0 !important;
      padding-left: 0 !important;
    }
    .px-sm-1 {
      padding-right: 0.25rem !important;
      padding-left: 0.25rem !important;
    }
    .px-sm-2 {
      padding-right: 0.5rem !important;
      padding-left: 0.5rem !important;
    }
    .px-sm-3 {
      padding-right: 1rem !important;
      padding-left: 1rem !important;
    }
    .px-sm-4 {
      padding-right: 1.5rem !important;
      padding-left: 1.5rem !important;
    }
    .px-sm-5 {
      padding-right: 3rem !important;
      padding-left: 3rem !important;
    }
    .py-sm-0 {
      padding-top: 0 !important;
      padding-bottom: 0 !important;
    }
    .py-sm-1 {
      padding-top: 0.25rem !important;
      padding-bottom: 0.25rem !important;
    }
    .py-sm-2 {
      padding-top: 0.5rem !important;
      padding-bottom: 0.5rem !important;
    }
    .py-sm-3 {
      padding-top: 1rem !important;
      padding-bottom: 1rem !important;
    }
    .py-sm-4 {
      padding-top: 1.5rem !important;
      padding-bottom: 1.5rem !important;
    }
    .py-sm-5 {
      padding-top: 3rem !important;
      padding-bottom: 3rem !important;
    }
    .pt-sm-0 {
      padding-top: 0 !important;
    }
    .pt-sm-1 {
      padding-top: 0.25rem !important;
    }
    .pt-sm-2 {
      padding-top: 0.5rem !important;
    }
    .pt-sm-3 {
      padding-top: 1rem !important;
    }
    .pt-sm-4 {
      padding-top: 1.5rem !important;
    }
    .pt-sm-5 {
      padding-top: 3rem !important;
    }
    .pe-sm-0 {
      padding-right: 0 !important;
    }
    .pe-sm-1 {
      padding-right: 0.25rem !important;
    }
    .pe-sm-2 {
      padding-right: 0.5rem !important;
    }
    .pe-sm-3 {
      padding-right: 1rem !important;
    }
    .pe-sm-4 {
      padding-right: 1.5rem !important;
    }
    .pe-sm-5 {
      padding-right: 3rem !important;
    }
    .pb-sm-0 {
      padding-bottom: 0 !important;
    }
    .pb-sm-1 {
      padding-bottom: 0.25rem !important;
    }
    .pb-sm-2 {
      padding-bottom: 0.5rem !important;
    }
    .pb-sm-3 {
      padding-bottom: 1rem !important;
    }
    .pb-sm-4 {
      padding-bottom: 1.5rem !important;
    }
    .pb-sm-5 {
      padding-bottom: 3rem !important;
    }
    .ps-sm-0 {
      padding-left: 0 !important;
    }
    .ps-sm-1 {
      padding-left: 0.25rem !important;
    }
    .ps-sm-2 {
      padding-left: 0.5rem !important;
    }
    .ps-sm-3 {
      padding-left: 1rem !important;
    }
    .ps-sm-4 {
      padding-left: 1.5rem !important;
    }
    .ps-sm-5 {
      padding-left: 3rem !important;
    }
    .gap-sm-0 {
      gap: 0 !important;
    }
    .gap-sm-1 {
      gap: 0.25rem !important;
    }
    .gap-sm-2 {
      gap: 0.5rem !important;
    }
    .gap-sm-3 {
      gap: 1rem !important;
    }
    .gap-sm-4 {
      gap: 1.5rem !important;
    }
    .gap-sm-5 {
      gap: 3rem !important;
    }
    .row-gap-sm-0 {
      row-gap: 0 !important;
    }
    .row-gap-sm-1 {
      row-gap: 0.25rem !important;
    }
    .row-gap-sm-2 {
      row-gap: 0.5rem !important;
    }
    .row-gap-sm-3 {
      row-gap: 1rem !important;
    }
    .row-gap-sm-4 {
      row-gap: 1.5rem !important;
    }
    .row-gap-sm-5 {
      row-gap: 3rem !important;
    }
    .column-gap-sm-0 {
      -moz-column-gap: 0 !important;
      -webkit-column-gap: 0 !important;
              column-gap: 0 !important;
    }
    .column-gap-sm-1 {
      -moz-column-gap: 0.25rem !important;
      -webkit-column-gap: 0.25rem !important;
              column-gap: 0.25rem !important;
    }
    .column-gap-sm-2 {
      -moz-column-gap: 0.5rem !important;
      -webkit-column-gap: 0.5rem !important;
              column-gap: 0.5rem !important;
    }
    .column-gap-sm-3 {
      -moz-column-gap: 1rem !important;
      -webkit-column-gap: 1rem !important;
              column-gap: 1rem !important;
    }
    .column-gap-sm-4 {
      -moz-column-gap: 1.5rem !important;
      -webkit-column-gap: 1.5rem !important;
              column-gap: 1.5rem !important;
    }
    .column-gap-sm-5 {
      -moz-column-gap: 3rem !important;
      -webkit-column-gap: 3rem !important;
              column-gap: 3rem !important;
    }
    .text-sm-start {
      text-align: left !important;
    }
    .text-sm-end {
      text-align: right !important;
    }
    .text-sm-center {
      text-align: center !important;
    }
  }
  @media (min-width: 768px) {
    .float-md-start {
      float: left !important;
    }
    .float-md-end {
      float: right !important;
    }
    .float-md-none {
      float: none !important;
    }
    .object-fit-md-contain {
      -o-object-fit: contain !important;
      object-fit: contain !important;
    }
    .object-fit-md-cover {
      -o-object-fit: cover !important;
      object-fit: cover !important;
    }
    .object-fit-md-fill {
      -o-object-fit: fill !important;
      object-fit: fill !important;
    }
    .object-fit-md-scale {
      -o-object-fit: scale-down !important;
      object-fit: scale-down !important;
    }
    .object-fit-md-none {
      -o-object-fit: none !important;
      object-fit: none !important;
    }
    .d-md-inline {
      display: inline !important;
    }
    .d-md-inline-block {
      display: inline-block !important;
    }
    .d-md-block {
      display: block !important;
    }
    .d-md-grid {
      display: -ms-grid !important;
      display: grid !important;
    }
    .d-md-table {
      display: table !important;
    }
    .d-md-table-row {
      display: table-row !important;
    }
    .d-md-table-cell {
      display: table-cell !important;
    }
    .d-md-flex {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
    }
    .d-md-inline-flex {
      display: -webkit-inline-box !important;
      display: -ms-inline-flexbox !important;
      display: inline-flex !important;
    }
    .d-md-none {
      display: none !important;
    }
    .flex-md-fill {
      -webkit-box-flex: 1 !important;
          -ms-flex: 1 1 auto !important;
              flex: 1 1 auto !important;
    }
    .flex-md-row {
      -webkit-box-orient: horizontal !important;
      -webkit-box-direction: normal !important;
          -ms-flex-direction: row !important;
              flex-direction: row !important;
    }
    .flex-md-column {
      -webkit-box-orient: vertical !important;
      -webkit-box-direction: normal !important;
          -ms-flex-direction: column !important;
              flex-direction: column !important;
    }
    .flex-md-row-reverse {
      -webkit-box-orient: horizontal !important;
      -webkit-box-direction: reverse !important;
          -ms-flex-direction: row-reverse !important;
              flex-direction: row-reverse !important;
    }
    .flex-md-column-reverse {
      -webkit-box-orient: vertical !important;
      -webkit-box-direction: reverse !important;
          -ms-flex-direction: column-reverse !important;
              flex-direction: column-reverse !important;
    }
    .flex-md-grow-0 {
      -webkit-box-flex: 0 !important;
          -ms-flex-positive: 0 !important;
              flex-grow: 0 !important;
    }
    .flex-md-grow-1 {
      -webkit-box-flex: 1 !important;
          -ms-flex-positive: 1 !important;
              flex-grow: 1 !important;
    }
    .flex-md-shrink-0 {
      -ms-flex-negative: 0 !important;
          flex-shrink: 0 !important;
    }
    .flex-md-shrink-1 {
      -ms-flex-negative: 1 !important;
          flex-shrink: 1 !important;
    }
    .flex-md-wrap {
      -ms-flex-wrap: wrap !important;
          flex-wrap: wrap !important;
    }
    .flex-md-nowrap {
      -ms-flex-wrap: nowrap !important;
          flex-wrap: nowrap !important;
    }
    .flex-md-wrap-reverse {
      -ms-flex-wrap: wrap-reverse !important;
          flex-wrap: wrap-reverse !important;
    }
    .justify-content-md-start {
      -webkit-box-pack: start !important;
          -ms-flex-pack: start !important;
              justify-content: flex-start !important;
    }
    .justify-content-md-end {
      -webkit-box-pack: end !important;
          -ms-flex-pack: end !important;
              justify-content: flex-end !important;
    }
    .justify-content-md-center {
      -webkit-box-pack: center !important;
          -ms-flex-pack: center !important;
              justify-content: center !important;
    }
    .justify-content-md-between {
      -webkit-box-pack: justify !important;
          -ms-flex-pack: justify !important;
              justify-content: space-between !important;
    }
    .justify-content-md-around {
      -ms-flex-pack: distribute !important;
          justify-content: space-around !important;
    }
    .justify-content-md-evenly {
      -webkit-box-pack: space-evenly !important;
          -ms-flex-pack: space-evenly !important;
              justify-content: space-evenly !important;
    }
    .align-items-md-start {
      -webkit-box-align: start !important;
          -ms-flex-align: start !important;
              align-items: flex-start !important;
    }
    .align-items-md-end {
      -webkit-box-align: end !important;
          -ms-flex-align: end !important;
              align-items: flex-end !important;
    }
    .align-items-md-center {
      -webkit-box-align: center !important;
          -ms-flex-align: center !important;
              align-items: center !important;
    }
    .align-items-md-baseline {
      -webkit-box-align: baseline !important;
          -ms-flex-align: baseline !important;
              align-items: baseline !important;
    }
    .align-items-md-stretch {
      -webkit-box-align: stretch !important;
          -ms-flex-align: stretch !important;
              align-items: stretch !important;
    }
    .align-content-md-start {
      -ms-flex-line-pack: start !important;
          align-content: flex-start !important;
    }
    .align-content-md-end {
      -ms-flex-line-pack: end !important;
          align-content: flex-end !important;
    }
    .align-content-md-center {
      -ms-flex-line-pack: center !important;
          align-content: center !important;
    }
    .align-content-md-between {
      -ms-flex-line-pack: justify !important;
          align-content: space-between !important;
    }
    .align-content-md-around {
      -ms-flex-line-pack: distribute !important;
          align-content: space-around !important;
    }
    .align-content-md-stretch {
      -ms-flex-line-pack: stretch !important;
          align-content: stretch !important;
    }
    .align-self-md-auto {
      -ms-flex-item-align: auto !important;
          -ms-grid-row-align: auto !important;
          align-self: auto !important;
    }
    .align-self-md-start {
      -ms-flex-item-align: start !important;
          align-self: flex-start !important;
    }
    .align-self-md-end {
      -ms-flex-item-align: end !important;
          align-self: flex-end !important;
    }
    .align-self-md-center {
      -ms-flex-item-align: center !important;
          -ms-grid-row-align: center !important;
          align-self: center !important;
    }
    .align-self-md-baseline {
      -ms-flex-item-align: baseline !important;
          align-self: baseline !important;
    }
    .align-self-md-stretch {
      -ms-flex-item-align: stretch !important;
          -ms-grid-row-align: stretch !important;
          align-self: stretch !important;
    }
    .order-md-first {
      -webkit-box-ordinal-group: 0 !important;
          -ms-flex-order: -1 !important;
              order: -1 !important;
    }
    .order-md-0 {
      -webkit-box-ordinal-group: 1 !important;
          -ms-flex-order: 0 !important;
              order: 0 !important;
    }
    .order-md-1 {
      -webkit-box-ordinal-group: 2 !important;
          -ms-flex-order: 1 !important;
              order: 1 !important;
    }
    .order-md-2 {
      -webkit-box-ordinal-group: 3 !important;
          -ms-flex-order: 2 !important;
              order: 2 !important;
    }
    .order-md-3 {
      -webkit-box-ordinal-group: 4 !important;
          -ms-flex-order: 3 !important;
              order: 3 !important;
    }
    .order-md-4 {
      -webkit-box-ordinal-group: 5 !important;
          -ms-flex-order: 4 !important;
              order: 4 !important;
    }
    .order-md-5 {
      -webkit-box-ordinal-group: 6 !important;
          -ms-flex-order: 5 !important;
              order: 5 !important;
    }
    .order-md-last {
      -webkit-box-ordinal-group: 7 !important;
          -ms-flex-order: 6 !important;
              order: 6 !important;
    }
    .m-md-0 {
      margin: 0 !important;
    }
    .m-md-1 {
      margin: 0.25rem !important;
    }
    .m-md-2 {
      margin: 0.5rem !important;
    }
    .m-md-3 {
      margin: 1rem !important;
    }
    .m-md-4 {
      margin: 1.5rem !important;
    }
    .m-md-5 {
      margin: 3rem !important;
    }
    .m-md-auto {
      margin: auto !important;
    }
    .mx-md-0 {
      margin-right: 0 !important;
      margin-left: 0 !important;
    }
    .mx-md-1 {
      margin-right: 0.25rem !important;
      margin-left: 0.25rem !important;
    }
    .mx-md-2 {
      margin-right: 0.5rem !important;
      margin-left: 0.5rem !important;
    }
    .mx-md-3 {
      margin-right: 1rem !important;
      margin-left: 1rem !important;
    }
    .mx-md-4 {
      margin-right: 1.5rem !important;
      margin-left: 1.5rem !important;
    }
    .mx-md-5 {
      margin-right: 3rem !important;
      margin-left: 3rem !important;
    }
    .mx-md-auto {
      margin-right: auto !important;
      margin-left: auto !important;
    }
    .my-md-0 {
      margin-top: 0 !important;
      margin-bottom: 0 !important;
    }
    .my-md-1 {
      margin-top: 0.25rem !important;
      margin-bottom: 0.25rem !important;
    }
    .my-md-2 {
      margin-top: 0.5rem !important;
      margin-bottom: 0.5rem !important;
    }
    .my-md-3 {
      margin-top: 1rem !important;
      margin-bottom: 1rem !important;
    }
    .my-md-4 {
      margin-top: 1.5rem !important;
      margin-bottom: 1.5rem !important;
    }
    .my-md-5 {
      margin-top: 3rem !important;
      margin-bottom: 3rem !important;
    }
    .my-md-auto {
      margin-top: auto !important;
      margin-bottom: auto !important;
    }
    .mt-md-0 {
      margin-top: 0 !important;
    }
    .mt-md-1 {
      margin-top: 0.25rem !important;
    }
    .mt-md-2 {
      margin-top: 0.5rem !important;
    }
    .mt-md-3 {
      margin-top: 1rem !important;
    }
    .mt-md-4 {
      margin-top: 1.5rem !important;
    }
    .mt-md-5 {
      margin-top: 3rem !important;
    }
    .mt-md-auto {
      margin-top: auto !important;
    }
    .me-md-0 {
      margin-right: 0 !important;
    }
    .me-md-1 {
      margin-right: 0.25rem !important;
    }
    .me-md-2 {
      margin-right: 0.5rem !important;
    }
    .me-md-3 {
      margin-right: 1rem !important;
    }
    .me-md-4 {
      margin-right: 1.5rem !important;
    }
    .me-md-5 {
      margin-right: 3rem !important;
    }
    .me-md-auto {
      margin-right: auto !important;
    }
    .mb-md-0 {
      margin-bottom: 0 !important;
    }
    .mb-md-1 {
      margin-bottom: 0.25rem !important;
    }
    .mb-md-2 {
      margin-bottom: 0.5rem !important;
    }
    .mb-md-3 {
      margin-bottom: 1rem !important;
    }
    .mb-md-4 {
      margin-bottom: 1.5rem !important;
    }
    .mb-md-5 {
      margin-bottom: 3rem !important;
    }
    .mb-md-auto {
      margin-bottom: auto !important;
    }
    .ms-md-0 {
      margin-left: 0 !important;
    }
    .ms-md-1 {
      margin-left: 0.25rem !important;
    }
    .ms-md-2 {
      margin-left: 0.5rem !important;
    }
    .ms-md-3 {
      margin-left: 1rem !important;
    }
    .ms-md-4 {
      margin-left: 1.5rem !important;
    }
    .ms-md-5 {
      margin-left: 3rem !important;
    }
    .ms-md-auto {
      margin-left: auto !important;
    }
    .p-md-0 {
      padding: 0 !important;
    }
    .p-md-1 {
      padding: 0.25rem !important;
    }
    .p-md-2 {
      padding: 0.5rem !important;
    }
    .p-md-3 {
      padding: 1rem !important;
    }
    .p-md-4 {
      padding: 1.5rem !important;
    }
    .p-md-5 {
      padding: 3rem !important;
    }
    .px-md-0 {
      padding-right: 0 !important;
      padding-left: 0 !important;
    }
    .px-md-1 {
      padding-right: 0.25rem !important;
      padding-left: 0.25rem !important;
    }
    .px-md-2 {
      padding-right: 0.5rem !important;
      padding-left: 0.5rem !important;
    }
    .px-md-3 {
      padding-right: 1rem !important;
      padding-left: 1rem !important;
    }
    .px-md-4 {
      padding-right: 1.5rem !important;
      padding-left: 1.5rem !important;
    }
    .px-md-5 {
      padding-right: 3rem !important;
      padding-left: 3rem !important;
    }
    .py-md-0 {
      padding-top: 0 !important;
      padding-bottom: 0 !important;
    }
    .py-md-1 {
      padding-top: 0.25rem !important;
      padding-bottom: 0.25rem !important;
    }
    .py-md-2 {
      padding-top: 0.5rem !important;
      padding-bottom: 0.5rem !important;
    }
    .py-md-3 {
      padding-top: 1rem !important;
      padding-bottom: 1rem !important;
    }
    .py-md-4 {
      padding-top: 1.5rem !important;
      padding-bottom: 1.5rem !important;
    }
    .py-md-5 {
      padding-top: 3rem !important;
      padding-bottom: 3rem !important;
    }
    .pt-md-0 {
      padding-top: 0 !important;
    }
    .pt-md-1 {
      padding-top: 0.25rem !important;
    }
    .pt-md-2 {
      padding-top: 0.5rem !important;
    }
    .pt-md-3 {
      padding-top: 1rem !important;
    }
    .pt-md-4 {
      padding-top: 1.5rem !important;
    }
    .pt-md-5 {
      padding-top: 3rem !important;
    }
    .pe-md-0 {
      padding-right: 0 !important;
    }
    .pe-md-1 {
      padding-right: 0.25rem !important;
    }
    .pe-md-2 {
      padding-right: 0.5rem !important;
    }
    .pe-md-3 {
      padding-right: 1rem !important;
    }
    .pe-md-4 {
      padding-right: 1.5rem !important;
    }
    .pe-md-5 {
      padding-right: 3rem !important;
    }
    .pb-md-0 {
      padding-bottom: 0 !important;
    }
    .pb-md-1 {
      padding-bottom: 0.25rem !important;
    }
    .pb-md-2 {
      padding-bottom: 0.5rem !important;
    }
    .pb-md-3 {
      padding-bottom: 1rem !important;
    }
    .pb-md-4 {
      padding-bottom: 1.5rem !important;
    }
    .pb-md-5 {
      padding-bottom: 3rem !important;
    }
    .ps-md-0 {
      padding-left: 0 !important;
    }
    .ps-md-1 {
      padding-left: 0.25rem !important;
    }
    .ps-md-2 {
      padding-left: 0.5rem !important;
    }
    .ps-md-3 {
      padding-left: 1rem !important;
    }
    .ps-md-4 {
      padding-left: 1.5rem !important;
    }
    .ps-md-5 {
      padding-left: 3rem !important;
    }
    .gap-md-0 {
      gap: 0 !important;
    }
    .gap-md-1 {
      gap: 0.25rem !important;
    }
    .gap-md-2 {
      gap: 0.5rem !important;
    }
    .gap-md-3 {
      gap: 1rem !important;
    }
    .gap-md-4 {
      gap: 1.5rem !important;
    }
    .gap-md-5 {
      gap: 3rem !important;
    }
    .row-gap-md-0 {
      row-gap: 0 !important;
    }
    .row-gap-md-1 {
      row-gap: 0.25rem !important;
    }
    .row-gap-md-2 {
      row-gap: 0.5rem !important;
    }
    .row-gap-md-3 {
      row-gap: 1rem !important;
    }
    .row-gap-md-4 {
      row-gap: 1.5rem !important;
    }
    .row-gap-md-5 {
      row-gap: 3rem !important;
    }
    .column-gap-md-0 {
      -moz-column-gap: 0 !important;
      -webkit-column-gap: 0 !important;
              column-gap: 0 !important;
    }
    .column-gap-md-1 {
      -moz-column-gap: 0.25rem !important;
      -webkit-column-gap: 0.25rem !important;
              column-gap: 0.25rem !important;
    }
    .column-gap-md-2 {
      -moz-column-gap: 0.5rem !important;
      -webkit-column-gap: 0.5rem !important;
              column-gap: 0.5rem !important;
    }
    .column-gap-md-3 {
      -moz-column-gap: 1rem !important;
      -webkit-column-gap: 1rem !important;
              column-gap: 1rem !important;
    }
    .column-gap-md-4 {
      -moz-column-gap: 1.5rem !important;
      -webkit-column-gap: 1.5rem !important;
              column-gap: 1.5rem !important;
    }
    .column-gap-md-5 {
      -moz-column-gap: 3rem !important;
      -webkit-column-gap: 3rem !important;
              column-gap: 3rem !important;
    }
    .text-md-start {
      text-align: left !important;
    }
    .text-md-end {
      text-align: right !important;
    }
    .text-md-center {
      text-align: center !important;
    }
  }
  @media (min-width: 992px) {
    .float-lg-start {
      float: left !important;
    }
    .float-lg-end {
      float: right !important;
    }
    .float-lg-none {
      float: none !important;
    }
    .object-fit-lg-contain {
      -o-object-fit: contain !important;
      object-fit: contain !important;
    }
    .object-fit-lg-cover {
      -o-object-fit: cover !important;
      object-fit: cover !important;
    }
    .object-fit-lg-fill {
      -o-object-fit: fill !important;
      object-fit: fill !important;
    }
    .object-fit-lg-scale {
      -o-object-fit: scale-down !important;
      object-fit: scale-down !important;
    }
    .object-fit-lg-none {
      -o-object-fit: none !important;
      object-fit: none !important;
    }
    .d-lg-inline {
      display: inline !important;
    }
    .d-lg-inline-block {
      display: inline-block !important;
    }
    .d-lg-block {
      display: block !important;
    }
    .d-lg-grid {
      display: -ms-grid !important;
      display: grid !important;
    }
    .d-lg-table {
      display: table !important;
    }
    .d-lg-table-row {
      display: table-row !important;
    }
    .d-lg-table-cell {
      display: table-cell !important;
    }
    .d-lg-flex {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
    }
    .d-lg-inline-flex {
      display: -webkit-inline-box !important;
      display: -ms-inline-flexbox !important;
      display: inline-flex !important;
    }
    .d-lg-none {
      display: none !important;
    }
    .flex-lg-fill {
      -webkit-box-flex: 1 !important;
          -ms-flex: 1 1 auto !important;
              flex: 1 1 auto !important;
    }
    .flex-lg-row {
      -webkit-box-orient: horizontal !important;
      -webkit-box-direction: normal !important;
          -ms-flex-direction: row !important;
              flex-direction: row !important;
    }
    .flex-lg-column {
      -webkit-box-orient: vertical !important;
      -webkit-box-direction: normal !important;
          -ms-flex-direction: column !important;
              flex-direction: column !important;
    }
    .flex-lg-row-reverse {
      -webkit-box-orient: horizontal !important;
      -webkit-box-direction: reverse !important;
          -ms-flex-direction: row-reverse !important;
              flex-direction: row-reverse !important;
    }
    .flex-lg-column-reverse {
      -webkit-box-orient: vertical !important;
      -webkit-box-direction: reverse !important;
          -ms-flex-direction: column-reverse !important;
              flex-direction: column-reverse !important;
    }
    .flex-lg-grow-0 {
      -webkit-box-flex: 0 !important;
          -ms-flex-positive: 0 !important;
              flex-grow: 0 !important;
    }
    .flex-lg-grow-1 {
      -webkit-box-flex: 1 !important;
          -ms-flex-positive: 1 !important;
              flex-grow: 1 !important;
    }
    .flex-lg-shrink-0 {
      -ms-flex-negative: 0 !important;
          flex-shrink: 0 !important;
    }
    .flex-lg-shrink-1 {
      -ms-flex-negative: 1 !important;
          flex-shrink: 1 !important;
    }
    .flex-lg-wrap {
      -ms-flex-wrap: wrap !important;
          flex-wrap: wrap !important;
    }
    .flex-lg-nowrap {
      -ms-flex-wrap: nowrap !important;
          flex-wrap: nowrap !important;
    }
    .flex-lg-wrap-reverse {
      -ms-flex-wrap: wrap-reverse !important;
          flex-wrap: wrap-reverse !important;
    }
    .justify-content-lg-start {
      -webkit-box-pack: start !important;
          -ms-flex-pack: start !important;
              justify-content: flex-start !important;
    }
    .justify-content-lg-end {
      -webkit-box-pack: end !important;
          -ms-flex-pack: end !important;
              justify-content: flex-end !important;
    }
    .justify-content-lg-center {
      -webkit-box-pack: center !important;
          -ms-flex-pack: center !important;
              justify-content: center !important;
    }
    .justify-content-lg-between {
      -webkit-box-pack: justify !important;
          -ms-flex-pack: justify !important;
              justify-content: space-between !important;
    }
    .justify-content-lg-around {
      -ms-flex-pack: distribute !important;
          justify-content: space-around !important;
    }
    .justify-content-lg-evenly {
      -webkit-box-pack: space-evenly !important;
          -ms-flex-pack: space-evenly !important;
              justify-content: space-evenly !important;
    }
    .align-items-lg-start {
      -webkit-box-align: start !important;
          -ms-flex-align: start !important;
              align-items: flex-start !important;
    }
    .align-items-lg-end {
      -webkit-box-align: end !important;
          -ms-flex-align: end !important;
              align-items: flex-end !important;
    }
    .align-items-lg-center {
      -webkit-box-align: center !important;
          -ms-flex-align: center !important;
              align-items: center !important;
    }
    .align-items-lg-baseline {
      -webkit-box-align: baseline !important;
          -ms-flex-align: baseline !important;
              align-items: baseline !important;
    }
    .align-items-lg-stretch {
      -webkit-box-align: stretch !important;
          -ms-flex-align: stretch !important;
              align-items: stretch !important;
    }
    .align-content-lg-start {
      -ms-flex-line-pack: start !important;
          align-content: flex-start !important;
    }
    .align-content-lg-end {
      -ms-flex-line-pack: end !important;
          align-content: flex-end !important;
    }
    .align-content-lg-center {
      -ms-flex-line-pack: center !important;
          align-content: center !important;
    }
    .align-content-lg-between {
      -ms-flex-line-pack: justify !important;
          align-content: space-between !important;
    }
    .align-content-lg-around {
      -ms-flex-line-pack: distribute !important;
          align-content: space-around !important;
    }
    .align-content-lg-stretch {
      -ms-flex-line-pack: stretch !important;
          align-content: stretch !important;
    }
    .align-self-lg-auto {
      -ms-flex-item-align: auto !important;
          -ms-grid-row-align: auto !important;
          align-self: auto !important;
    }
    .align-self-lg-start {
      -ms-flex-item-align: start !important;
          align-self: flex-start !important;
    }
    .align-self-lg-end {
      -ms-flex-item-align: end !important;
          align-self: flex-end !important;
    }
    .align-self-lg-center {
      -ms-flex-item-align: center !important;
          -ms-grid-row-align: center !important;
          align-self: center !important;
    }
    .align-self-lg-baseline {
      -ms-flex-item-align: baseline !important;
          align-self: baseline !important;
    }
    .align-self-lg-stretch {
      -ms-flex-item-align: stretch !important;
          -ms-grid-row-align: stretch !important;
          align-self: stretch !important;
    }
    .order-lg-first {
      -webkit-box-ordinal-group: 0 !important;
          -ms-flex-order: -1 !important;
              order: -1 !important;
    }
    .order-lg-0 {
      -webkit-box-ordinal-group: 1 !important;
          -ms-flex-order: 0 !important;
              order: 0 !important;
    }
    .order-lg-1 {
      -webkit-box-ordinal-group: 2 !important;
          -ms-flex-order: 1 !important;
              order: 1 !important;
    }
    .order-lg-2 {
      -webkit-box-ordinal-group: 3 !important;
          -ms-flex-order: 2 !important;
              order: 2 !important;
    }
    .order-lg-3 {
      -webkit-box-ordinal-group: 4 !important;
          -ms-flex-order: 3 !important;
              order: 3 !important;
    }
    .order-lg-4 {
      -webkit-box-ordinal-group: 5 !important;
          -ms-flex-order: 4 !important;
              order: 4 !important;
    }
    .order-lg-5 {
      -webkit-box-ordinal-group: 6 !important;
          -ms-flex-order: 5 !important;
              order: 5 !important;
    }
    .order-lg-last {
      -webkit-box-ordinal-group: 7 !important;
          -ms-flex-order: 6 !important;
              order: 6 !important;
    }
    .m-lg-0 {
      margin: 0 !important;
    }
    .m-lg-1 {
      margin: 0.25rem !important;
    }
    .m-lg-2 {
      margin: 0.5rem !important;
    }
    .m-lg-3 {
      margin: 1rem !important;
    }
    .m-lg-4 {
      margin: 1.5rem !important;
    }
    .m-lg-5 {
      margin: 3rem !important;
    }
    .m-lg-auto {
      margin: auto !important;
    }
    .mx-lg-0 {
      margin-right: 0 !important;
      margin-left: 0 !important;
    }
    .mx-lg-1 {
      margin-right: 0.25rem !important;
      margin-left: 0.25rem !important;
    }
    .mx-lg-2 {
      margin-right: 0.5rem !important;
      margin-left: 0.5rem !important;
    }
    .mx-lg-3 {
      margin-right: 1rem !important;
      margin-left: 1rem !important;
    }
    .mx-lg-4 {
      margin-right: 1.5rem !important;
      margin-left: 1.5rem !important;
    }
    .mx-lg-5 {
      margin-right: 3rem !important;
      margin-left: 3rem !important;
    }
    .mx-lg-auto {
      margin-right: auto !important;
      margin-left: auto !important;
    }
    .my-lg-0 {
      margin-top: 0 !important;
      margin-bottom: 0 !important;
    }
    .my-lg-1 {
      margin-top: 0.25rem !important;
      margin-bottom: 0.25rem !important;
    }
    .my-lg-2 {
      margin-top: 0.5rem !important;
      margin-bottom: 0.5rem !important;
    }
    .my-lg-3 {
      margin-top: 1rem !important;
      margin-bottom: 1rem !important;
    }
    .my-lg-4 {
      margin-top: 1.5rem !important;
      margin-bottom: 1.5rem !important;
    }
    .my-lg-5 {
      margin-top: 3rem !important;
      margin-bottom: 3rem !important;
    }
    .my-lg-auto {
      margin-top: auto !important;
      margin-bottom: auto !important;
    }
    .mt-lg-0 {
      margin-top: 0 !important;
    }
    .mt-lg-1 {
      margin-top: 0.25rem !important;
    }
    .mt-lg-2 {
      margin-top: 0.5rem !important;
    }
    .mt-lg-3 {
      margin-top: 1rem !important;
    }
    .mt-lg-4 {
      margin-top: 1.5rem !important;
    }
    .mt-lg-5 {
      margin-top: 3rem !important;
    }
    .mt-lg-auto {
      margin-top: auto !important;
    }
    .me-lg-0 {
      margin-right: 0 !important;
    }
    .me-lg-1 {
      margin-right: 0.25rem !important;
    }
    .me-lg-2 {
      margin-right: 0.5rem !important;
    }
    .me-lg-3 {
      margin-right: 1rem !important;
    }
    .me-lg-4 {
      margin-right: 1.5rem !important;
    }
    .me-lg-5 {
      margin-right: 3rem !important;
    }
    .me-lg-auto {
      margin-right: auto !important;
    }
    .mb-lg-0 {
      margin-bottom: 0 !important;
    }
    .mb-lg-1 {
      margin-bottom: 0.25rem !important;
    }
    .mb-lg-2 {
      margin-bottom: 0.5rem !important;
    }
    .mb-lg-3 {
      margin-bottom: 1rem !important;
    }
    .mb-lg-4 {
      margin-bottom: 1.5rem !important;
    }
    .mb-lg-5 {
      margin-bottom: 3rem !important;
    }
    .mb-lg-auto {
      margin-bottom: auto !important;
    }
    .ms-lg-0 {
      margin-left: 0 !important;
    }
    .ms-lg-1 {
      margin-left: 0.25rem !important;
    }
    .ms-lg-2 {
      margin-left: 0.5rem !important;
    }
    .ms-lg-3 {
      margin-left: 1rem !important;
    }
    .ms-lg-4 {
      margin-left: 1.5rem !important;
    }
    .ms-lg-5 {
      margin-left: 3rem !important;
    }
    .ms-lg-auto {
      margin-left: auto !important;
    }
    .p-lg-0 {
      padding: 0 !important;
    }
    .p-lg-1 {
      padding: 0.25rem !important;
    }
    .p-lg-2 {
      padding: 0.5rem !important;
    }
    .p-lg-3 {
      padding: 1rem !important;
    }
    .p-lg-4 {
      padding: 1.5rem !important;
    }
    .p-lg-5 {
      padding: 3rem !important;
    }
    .px-lg-0 {
      padding-right: 0 !important;
      padding-left: 0 !important;
    }
    .px-lg-1 {
      padding-right: 0.25rem !important;
      padding-left: 0.25rem !important;
    }
    .px-lg-2 {
      padding-right: 0.5rem !important;
      padding-left: 0.5rem !important;
    }
    .px-lg-3 {
      padding-right: 1rem !important;
      padding-left: 1rem !important;
    }
    .px-lg-4 {
      padding-right: 1.5rem !important;
      padding-left: 1.5rem !important;
    }
    .px-lg-5 {
      padding-right: 3rem !important;
      padding-left: 3rem !important;
    }
    .py-lg-0 {
      padding-top: 0 !important;
      padding-bottom: 0 !important;
    }
    .py-lg-1 {
      padding-top: 0.25rem !important;
      padding-bottom: 0.25rem !important;
    }
    .py-lg-2 {
      padding-top: 0.5rem !important;
      padding-bottom: 0.5rem !important;
    }
    .py-lg-3 {
      padding-top: 1rem !important;
      padding-bottom: 1rem !important;
    }
    .py-lg-4 {
      padding-top: 1.5rem !important;
      padding-bottom: 1.5rem !important;
    }
    .py-lg-5 {
      padding-top: 3rem !important;
      padding-bottom: 3rem !important;
    }
    .pt-lg-0 {
      padding-top: 0 !important;
    }
    .pt-lg-1 {
      padding-top: 0.25rem !important;
    }
    .pt-lg-2 {
      padding-top: 0.5rem !important;
    }
    .pt-lg-3 {
      padding-top: 1rem !important;
    }
    .pt-lg-4 {
      padding-top: 1.5rem !important;
    }
    .pt-lg-5 {
      padding-top: 3rem !important;
    }
    .pe-lg-0 {
      padding-right: 0 !important;
    }
    .pe-lg-1 {
      padding-right: 0.25rem !important;
    }
    .pe-lg-2 {
      padding-right: 0.5rem !important;
    }
    .pe-lg-3 {
      padding-right: 1rem !important;
    }
    .pe-lg-4 {
      padding-right: 1.5rem !important;
    }
    .pe-lg-5 {
      padding-right: 3rem !important;
    }
    .pb-lg-0 {
      padding-bottom: 0 !important;
    }
    .pb-lg-1 {
      padding-bottom: 0.25rem !important;
    }
    .pb-lg-2 {
      padding-bottom: 0.5rem !important;
    }
    .pb-lg-3 {
      padding-bottom: 1rem !important;
    }
    .pb-lg-4 {
      padding-bottom: 1.5rem !important;
    }
    .pb-lg-5 {
      padding-bottom: 3rem !important;
    }
    .ps-lg-0 {
      padding-left: 0 !important;
    }
    .ps-lg-1 {
      padding-left: 0.25rem !important;
    }
    .ps-lg-2 {
      padding-left: 0.5rem !important;
    }
    .ps-lg-3 {
      padding-left: 1rem !important;
    }
    .ps-lg-4 {
      padding-left: 1.5rem !important;
    }
    .ps-lg-5 {
      padding-left: 3rem !important;
    }
    .gap-lg-0 {
      gap: 0 !important;
    }
    .gap-lg-1 {
      gap: 0.25rem !important;
    }
    .gap-lg-2 {
      gap: 0.5rem !important;
    }
    .gap-lg-3 {
      gap: 1rem !important;
    }
    .gap-lg-4 {
      gap: 1.5rem !important;
    }
    .gap-lg-5 {
      gap: 3rem !important;
    }
    .row-gap-lg-0 {
      row-gap: 0 !important;
    }
    .row-gap-lg-1 {
      row-gap: 0.25rem !important;
    }
    .row-gap-lg-2 {
      row-gap: 0.5rem !important;
    }
    .row-gap-lg-3 {
      row-gap: 1rem !important;
    }
    .row-gap-lg-4 {
      row-gap: 1.5rem !important;
    }
    .row-gap-lg-5 {
      row-gap: 3rem !important;
    }
    .column-gap-lg-0 {
      -moz-column-gap: 0 !important;
      -webkit-column-gap: 0 !important;
              column-gap: 0 !important;
    }
    .column-gap-lg-1 {
      -moz-column-gap: 0.25rem !important;
      -webkit-column-gap: 0.25rem !important;
              column-gap: 0.25rem !important;
    }
    .column-gap-lg-2 {
      -moz-column-gap: 0.5rem !important;
      -webkit-column-gap: 0.5rem !important;
              column-gap: 0.5rem !important;
    }
    .column-gap-lg-3 {
      -moz-column-gap: 1rem !important;
      -webkit-column-gap: 1rem !important;
              column-gap: 1rem !important;
    }
    .column-gap-lg-4 {
      -moz-column-gap: 1.5rem !important;
      -webkit-column-gap: 1.5rem !important;
              column-gap: 1.5rem !important;
    }
    .column-gap-lg-5 {
      -moz-column-gap: 3rem !important;
      -webkit-column-gap: 3rem !important;
              column-gap: 3rem !important;
    }
    .text-lg-start {
      text-align: left !important;
    }
    .text-lg-end {
      text-align: right !important;
    }
    .text-lg-center {
      text-align: center !important;
    }
  }
  @media (min-width: 1200px) {
    .float-xl-start {
      float: left !important;
    }
    .float-xl-end {
      float: right !important;
    }
    .float-xl-none {
      float: none !important;
    }
    .object-fit-xl-contain {
      -o-object-fit: contain !important;
      object-fit: contain !important;
    }
    .object-fit-xl-cover {
      -o-object-fit: cover !important;
      object-fit: cover !important;
    }
    .object-fit-xl-fill {
      -o-object-fit: fill !important;
      object-fit: fill !important;
    }
    .object-fit-xl-scale {
      -o-object-fit: scale-down !important;
      object-fit: scale-down !important;
    }
    .object-fit-xl-none {
      -o-object-fit: none !important;
      object-fit: none !important;
    }
    .d-xl-inline {
      display: inline !important;
    }
    .d-xl-inline-block {
      display: inline-block !important;
    }
    .d-xl-block {
      display: block !important;
    }
    .d-xl-grid {
      display: -ms-grid !important;
      display: grid !important;
    }
    .d-xl-table {
      display: table !important;
    }
    .d-xl-table-row {
      display: table-row !important;
    }
    .d-xl-table-cell {
      display: table-cell !important;
    }
    .d-xl-flex {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
    }
    .d-xl-inline-flex {
      display: -webkit-inline-box !important;
      display: -ms-inline-flexbox !important;
      display: inline-flex !important;
    }
    .d-xl-none {
      display: none !important;
    }
    .flex-xl-fill {
      -webkit-box-flex: 1 !important;
          -ms-flex: 1 1 auto !important;
              flex: 1 1 auto !important;
    }
    .flex-xl-row {
      -webkit-box-orient: horizontal !important;
      -webkit-box-direction: normal !important;
          -ms-flex-direction: row !important;
              flex-direction: row !important;
    }
    .flex-xl-column {
      -webkit-box-orient: vertical !important;
      -webkit-box-direction: normal !important;
          -ms-flex-direction: column !important;
              flex-direction: column !important;
    }
    .flex-xl-row-reverse {
      -webkit-box-orient: horizontal !important;
      -webkit-box-direction: reverse !important;
          -ms-flex-direction: row-reverse !important;
              flex-direction: row-reverse !important;
    }
    .flex-xl-column-reverse {
      -webkit-box-orient: vertical !important;
      -webkit-box-direction: reverse !important;
          -ms-flex-direction: column-reverse !important;
              flex-direction: column-reverse !important;
    }
    .flex-xl-grow-0 {
      -webkit-box-flex: 0 !important;
          -ms-flex-positive: 0 !important;
              flex-grow: 0 !important;
    }
    .flex-xl-grow-1 {
      -webkit-box-flex: 1 !important;
          -ms-flex-positive: 1 !important;
              flex-grow: 1 !important;
    }
    .flex-xl-shrink-0 {
      -ms-flex-negative: 0 !important;
          flex-shrink: 0 !important;
    }
    .flex-xl-shrink-1 {
      -ms-flex-negative: 1 !important;
          flex-shrink: 1 !important;
    }
    .flex-xl-wrap {
      -ms-flex-wrap: wrap !important;
          flex-wrap: wrap !important;
    }
    .flex-xl-nowrap {
      -ms-flex-wrap: nowrap !important;
          flex-wrap: nowrap !important;
    }
    .flex-xl-wrap-reverse {
      -ms-flex-wrap: wrap-reverse !important;
          flex-wrap: wrap-reverse !important;
    }
    .justify-content-xl-start {
      -webkit-box-pack: start !important;
          -ms-flex-pack: start !important;
              justify-content: flex-start !important;
    }
    .justify-content-xl-end {
      -webkit-box-pack: end !important;
          -ms-flex-pack: end !important;
              justify-content: flex-end !important;
    }
    .justify-content-xl-center {
      -webkit-box-pack: center !important;
          -ms-flex-pack: center !important;
              justify-content: center !important;
    }
    .justify-content-xl-between {
      -webkit-box-pack: justify !important;
          -ms-flex-pack: justify !important;
              justify-content: space-between !important;
    }
    .justify-content-xl-around {
      -ms-flex-pack: distribute !important;
          justify-content: space-around !important;
    }
    .justify-content-xl-evenly {
      -webkit-box-pack: space-evenly !important;
          -ms-flex-pack: space-evenly !important;
              justify-content: space-evenly !important;
    }
    .align-items-xl-start {
      -webkit-box-align: start !important;
          -ms-flex-align: start !important;
              align-items: flex-start !important;
    }
    .align-items-xl-end {
      -webkit-box-align: end !important;
          -ms-flex-align: end !important;
              align-items: flex-end !important;
    }
    .align-items-xl-center {
      -webkit-box-align: center !important;
          -ms-flex-align: center !important;
              align-items: center !important;
    }
    .align-items-xl-baseline {
      -webkit-box-align: baseline !important;
          -ms-flex-align: baseline !important;
              align-items: baseline !important;
    }
    .align-items-xl-stretch {
      -webkit-box-align: stretch !important;
          -ms-flex-align: stretch !important;
              align-items: stretch !important;
    }
    .align-content-xl-start {
      -ms-flex-line-pack: start !important;
          align-content: flex-start !important;
    }
    .align-content-xl-end {
      -ms-flex-line-pack: end !important;
          align-content: flex-end !important;
    }
    .align-content-xl-center {
      -ms-flex-line-pack: center !important;
          align-content: center !important;
    }
    .align-content-xl-between {
      -ms-flex-line-pack: justify !important;
          align-content: space-between !important;
    }
    .align-content-xl-around {
      -ms-flex-line-pack: distribute !important;
          align-content: space-around !important;
    }
    .align-content-xl-stretch {
      -ms-flex-line-pack: stretch !important;
          align-content: stretch !important;
    }
    .align-self-xl-auto {
      -ms-flex-item-align: auto !important;
          -ms-grid-row-align: auto !important;
          align-self: auto !important;
    }
    .align-self-xl-start {
      -ms-flex-item-align: start !important;
          align-self: flex-start !important;
    }
    .align-self-xl-end {
      -ms-flex-item-align: end !important;
          align-self: flex-end !important;
    }
    .align-self-xl-center {
      -ms-flex-item-align: center !important;
          -ms-grid-row-align: center !important;
          align-self: center !important;
    }
    .align-self-xl-baseline {
      -ms-flex-item-align: baseline !important;
          align-self: baseline !important;
    }
    .align-self-xl-stretch {
      -ms-flex-item-align: stretch !important;
          -ms-grid-row-align: stretch !important;
          align-self: stretch !important;
    }
    .order-xl-first {
      -webkit-box-ordinal-group: 0 !important;
          -ms-flex-order: -1 !important;
              order: -1 !important;
    }
    .order-xl-0 {
      -webkit-box-ordinal-group: 1 !important;
          -ms-flex-order: 0 !important;
              order: 0 !important;
    }
    .order-xl-1 {
      -webkit-box-ordinal-group: 2 !important;
          -ms-flex-order: 1 !important;
              order: 1 !important;
    }
    .order-xl-2 {
      -webkit-box-ordinal-group: 3 !important;
          -ms-flex-order: 2 !important;
              order: 2 !important;
    }
    .order-xl-3 {
      -webkit-box-ordinal-group: 4 !important;
          -ms-flex-order: 3 !important;
              order: 3 !important;
    }
    .order-xl-4 {
      -webkit-box-ordinal-group: 5 !important;
          -ms-flex-order: 4 !important;
              order: 4 !important;
    }
    .order-xl-5 {
      -webkit-box-ordinal-group: 6 !important;
          -ms-flex-order: 5 !important;
              order: 5 !important;
    }
    .order-xl-last {
      -webkit-box-ordinal-group: 7 !important;
          -ms-flex-order: 6 !important;
              order: 6 !important;
    }
    .m-xl-0 {
      margin: 0 !important;
    }
    .m-xl-1 {
      margin: 0.25rem !important;
    }
    .m-xl-2 {
      margin: 0.5rem !important;
    }
    .m-xl-3 {
      margin: 1rem !important;
    }
    .m-xl-4 {
      margin: 1.5rem !important;
    }
    .m-xl-5 {
      margin: 3rem !important;
    }
    .m-xl-auto {
      margin: auto !important;
    }
    .mx-xl-0 {
      margin-right: 0 !important;
      margin-left: 0 !important;
    }
    .mx-xl-1 {
      margin-right: 0.25rem !important;
      margin-left: 0.25rem !important;
    }
    .mx-xl-2 {
      margin-right: 0.5rem !important;
      margin-left: 0.5rem !important;
    }
    .mx-xl-3 {
      margin-right: 1rem !important;
      margin-left: 1rem !important;
    }
    .mx-xl-4 {
      margin-right: 1.5rem !important;
      margin-left: 1.5rem !important;
    }
    .mx-xl-5 {
      margin-right: 3rem !important;
      margin-left: 3rem !important;
    }
    .mx-xl-auto {
      margin-right: auto !important;
      margin-left: auto !important;
    }
    .my-xl-0 {
      margin-top: 0 !important;
      margin-bottom: 0 !important;
    }
    .my-xl-1 {
      margin-top: 0.25rem !important;
      margin-bottom: 0.25rem !important;
    }
    .my-xl-2 {
      margin-top: 0.5rem !important;
      margin-bottom: 0.5rem !important;
    }
    .my-xl-3 {
      margin-top: 1rem !important;
      margin-bottom: 1rem !important;
    }
    .my-xl-4 {
      margin-top: 1.5rem !important;
      margin-bottom: 1.5rem !important;
    }
    .my-xl-5 {
      margin-top: 3rem !important;
      margin-bottom: 3rem !important;
    }
    .my-xl-auto {
      margin-top: auto !important;
      margin-bottom: auto !important;
    }
    .mt-xl-0 {
      margin-top: 0 !important;
    }
    .mt-xl-1 {
      margin-top: 0.25rem !important;
    }
    .mt-xl-2 {
      margin-top: 0.5rem !important;
    }
    .mt-xl-3 {
      margin-top: 1rem !important;
    }
    .mt-xl-4 {
      margin-top: 1.5rem !important;
    }
    .mt-xl-5 {
      margin-top: 3rem !important;
    }
    .mt-xl-auto {
      margin-top: auto !important;
    }
    .me-xl-0 {
      margin-right: 0 !important;
    }
    .me-xl-1 {
      margin-right: 0.25rem !important;
    }
    .me-xl-2 {
      margin-right: 0.5rem !important;
    }
    .me-xl-3 {
      margin-right: 1rem !important;
    }
    .me-xl-4 {
      margin-right: 1.5rem !important;
    }
    .me-xl-5 {
      margin-right: 3rem !important;
    }
    .me-xl-auto {
      margin-right: auto !important;
    }
    .mb-xl-0 {
      margin-bottom: 0 !important;
    }
    .mb-xl-1 {
      margin-bottom: 0.25rem !important;
    }
    .mb-xl-2 {
      margin-bottom: 0.5rem !important;
    }
    .mb-xl-3 {
      margin-bottom: 1rem !important;
    }
    .mb-xl-4 {
      margin-bottom: 1.5rem !important;
    }
    .mb-xl-5 {
      margin-bottom: 3rem !important;
    }
    .mb-xl-auto {
      margin-bottom: auto !important;
    }
    .ms-xl-0 {
      margin-left: 0 !important;
    }
    .ms-xl-1 {
      margin-left: 0.25rem !important;
    }
    .ms-xl-2 {
      margin-left: 0.5rem !important;
    }
    .ms-xl-3 {
      margin-left: 1rem !important;
    }
    .ms-xl-4 {
      margin-left: 1.5rem !important;
    }
    .ms-xl-5 {
      margin-left: 3rem !important;
    }
    .ms-xl-auto {
      margin-left: auto !important;
    }
    .p-xl-0 {
      padding: 0 !important;
    }
    .p-xl-1 {
      padding: 0.25rem !important;
    }
    .p-xl-2 {
      padding: 0.5rem !important;
    }
    .p-xl-3 {
      padding: 1rem !important;
    }
    .p-xl-4 {
      padding: 1.5rem !important;
    }
    .p-xl-5 {
      padding: 3rem !important;
    }
    .px-xl-0 {
      padding-right: 0 !important;
      padding-left: 0 !important;
    }
    .px-xl-1 {
      padding-right: 0.25rem !important;
      padding-left: 0.25rem !important;
    }
    .px-xl-2 {
      padding-right: 0.5rem !important;
      padding-left: 0.5rem !important;
    }
    .px-xl-3 {
      padding-right: 1rem !important;
      padding-left: 1rem !important;
    }
    .px-xl-4 {
      padding-right: 1.5rem !important;
      padding-left: 1.5rem !important;
    }
    .px-xl-5 {
      padding-right: 3rem !important;
      padding-left: 3rem !important;
    }
    .py-xl-0 {
      padding-top: 0 !important;
      padding-bottom: 0 !important;
    }
    .py-xl-1 {
      padding-top: 0.25rem !important;
      padding-bottom: 0.25rem !important;
    }
    .py-xl-2 {
      padding-top: 0.5rem !important;
      padding-bottom: 0.5rem !important;
    }
    .py-xl-3 {
      padding-top: 1rem !important;
      padding-bottom: 1rem !important;
    }
    .py-xl-4 {
      padding-top: 1.5rem !important;
      padding-bottom: 1.5rem !important;
    }
    .py-xl-5 {
      padding-top: 3rem !important;
      padding-bottom: 3rem !important;
    }
    .pt-xl-0 {
      padding-top: 0 !important;
    }
    .pt-xl-1 {
      padding-top: 0.25rem !important;
    }
    .pt-xl-2 {
      padding-top: 0.5rem !important;
    }
    .pt-xl-3 {
      padding-top: 1rem !important;
    }
    .pt-xl-4 {
      padding-top: 1.5rem !important;
    }
    .pt-xl-5 {
      padding-top: 3rem !important;
    }
    .pe-xl-0 {
      padding-right: 0 !important;
    }
    .pe-xl-1 {
      padding-right: 0.25rem !important;
    }
    .pe-xl-2 {
      padding-right: 0.5rem !important;
    }
    .pe-xl-3 {
      padding-right: 1rem !important;
    }
    .pe-xl-4 {
      padding-right: 1.5rem !important;
    }
    .pe-xl-5 {
      padding-right: 3rem !important;
    }
    .pb-xl-0 {
      padding-bottom: 0 !important;
    }
    .pb-xl-1 {
      padding-bottom: 0.25rem !important;
    }
    .pb-xl-2 {
      padding-bottom: 0.5rem !important;
    }
    .pb-xl-3 {
      padding-bottom: 1rem !important;
    }
    .pb-xl-4 {
      padding-bottom: 1.5rem !important;
    }
    .pb-xl-5 {
      padding-bottom: 3rem !important;
    }
    .ps-xl-0 {
      padding-left: 0 !important;
    }
    .ps-xl-1 {
      padding-left: 0.25rem !important;
    }
    .ps-xl-2 {
      padding-left: 0.5rem !important;
    }
    .ps-xl-3 {
      padding-left: 1rem !important;
    }
    .ps-xl-4 {
      padding-left: 1.5rem !important;
    }
    .ps-xl-5 {
      padding-left: 3rem !important;
    }
    .gap-xl-0 {
      gap: 0 !important;
    }
    .gap-xl-1 {
      gap: 0.25rem !important;
    }
    .gap-xl-2 {
      gap: 0.5rem !important;
    }
    .gap-xl-3 {
      gap: 1rem !important;
    }
    .gap-xl-4 {
      gap: 1.5rem !important;
    }
    .gap-xl-5 {
      gap: 3rem !important;
    }
    .row-gap-xl-0 {
      row-gap: 0 !important;
    }
    .row-gap-xl-1 {
      row-gap: 0.25rem !important;
    }
    .row-gap-xl-2 {
      row-gap: 0.5rem !important;
    }
    .row-gap-xl-3 {
      row-gap: 1rem !important;
    }
    .row-gap-xl-4 {
      row-gap: 1.5rem !important;
    }
    .row-gap-xl-5 {
      row-gap: 3rem !important;
    }
    .column-gap-xl-0 {
      -moz-column-gap: 0 !important;
      -webkit-column-gap: 0 !important;
              column-gap: 0 !important;
    }
    .column-gap-xl-1 {
      -moz-column-gap: 0.25rem !important;
      -webkit-column-gap: 0.25rem !important;
              column-gap: 0.25rem !important;
    }
    .column-gap-xl-2 {
      -moz-column-gap: 0.5rem !important;
      -webkit-column-gap: 0.5rem !important;
              column-gap: 0.5rem !important;
    }
    .column-gap-xl-3 {
      -moz-column-gap: 1rem !important;
      -webkit-column-gap: 1rem !important;
              column-gap: 1rem !important;
    }
    .column-gap-xl-4 {
      -moz-column-gap: 1.5rem !important;
      -webkit-column-gap: 1.5rem !important;
              column-gap: 1.5rem !important;
    }
    .column-gap-xl-5 {
      -moz-column-gap: 3rem !important;
      -webkit-column-gap: 3rem !important;
              column-gap: 3rem !important;
    }
    .text-xl-start {
      text-align: left !important;
    }
    .text-xl-end {
      text-align: right !important;
    }
    .text-xl-center {
      text-align: center !important;
    }
  }
  @media (min-width: 1400px) {
    .float-xxl-start {
      float: left !important;
    }
    .float-xxl-end {
      float: right !important;
    }
    .float-xxl-none {
      float: none !important;
    }
    .object-fit-xxl-contain {
      -o-object-fit: contain !important;
      object-fit: contain !important;
    }
    .object-fit-xxl-cover {
      -o-object-fit: cover !important;
      object-fit: cover !important;
    }
    .object-fit-xxl-fill {
      -o-object-fit: fill !important;
      object-fit: fill !important;
    }
    .object-fit-xxl-scale {
      -o-object-fit: scale-down !important;
      object-fit: scale-down !important;
    }
    .object-fit-xxl-none {
      -o-object-fit: none !important;
      object-fit: none !important;
    }
    .d-xxl-inline {
      display: inline !important;
    }
    .d-xxl-inline-block {
      display: inline-block !important;
    }
    .d-xxl-block {
      display: block !important;
    }
    .d-xxl-grid {
      display: -ms-grid !important;
      display: grid !important;
    }
    .d-xxl-table {
      display: table !important;
    }
    .d-xxl-table-row {
      display: table-row !important;
    }
    .d-xxl-table-cell {
      display: table-cell !important;
    }
    .d-xxl-flex {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
    }
    .d-xxl-inline-flex {
      display: -webkit-inline-box !important;
      display: -ms-inline-flexbox !important;
      display: inline-flex !important;
    }
    .d-xxl-none {
      display: none !important;
    }
    .flex-xxl-fill {
      -webkit-box-flex: 1 !important;
          -ms-flex: 1 1 auto !important;
              flex: 1 1 auto !important;
    }
    .flex-xxl-row {
      -webkit-box-orient: horizontal !important;
      -webkit-box-direction: normal !important;
          -ms-flex-direction: row !important;
              flex-direction: row !important;
    }
    .flex-xxl-column {
      -webkit-box-orient: vertical !important;
      -webkit-box-direction: normal !important;
          -ms-flex-direction: column !important;
              flex-direction: column !important;
    }
    .flex-xxl-row-reverse {
      -webkit-box-orient: horizontal !important;
      -webkit-box-direction: reverse !important;
          -ms-flex-direction: row-reverse !important;
              flex-direction: row-reverse !important;
    }
    .flex-xxl-column-reverse {
      -webkit-box-orient: vertical !important;
      -webkit-box-direction: reverse !important;
          -ms-flex-direction: column-reverse !important;
              flex-direction: column-reverse !important;
    }
    .flex-xxl-grow-0 {
      -webkit-box-flex: 0 !important;
          -ms-flex-positive: 0 !important;
              flex-grow: 0 !important;
    }
    .flex-xxl-grow-1 {
      -webkit-box-flex: 1 !important;
          -ms-flex-positive: 1 !important;
              flex-grow: 1 !important;
    }
    .flex-xxl-shrink-0 {
      -ms-flex-negative: 0 !important;
          flex-shrink: 0 !important;
    }
    .flex-xxl-shrink-1 {
      -ms-flex-negative: 1 !important;
          flex-shrink: 1 !important;
    }
    .flex-xxl-wrap {
      -ms-flex-wrap: wrap !important;
          flex-wrap: wrap !important;
    }
    .flex-xxl-nowrap {
      -ms-flex-wrap: nowrap !important;
          flex-wrap: nowrap !important;
    }
    .flex-xxl-wrap-reverse {
      -ms-flex-wrap: wrap-reverse !important;
          flex-wrap: wrap-reverse !important;
    }
    .justify-content-xxl-start {
      -webkit-box-pack: start !important;
          -ms-flex-pack: start !important;
              justify-content: flex-start !important;
    }
    .justify-content-xxl-end {
      -webkit-box-pack: end !important;
          -ms-flex-pack: end !important;
              justify-content: flex-end !important;
    }
    .justify-content-xxl-center {
      -webkit-box-pack: center !important;
          -ms-flex-pack: center !important;
              justify-content: center !important;
    }
    .justify-content-xxl-between {
      -webkit-box-pack: justify !important;
          -ms-flex-pack: justify !important;
              justify-content: space-between !important;
    }
    .justify-content-xxl-around {
      -ms-flex-pack: distribute !important;
          justify-content: space-around !important;
    }
    .justify-content-xxl-evenly {
      -webkit-box-pack: space-evenly !important;
          -ms-flex-pack: space-evenly !important;
              justify-content: space-evenly !important;
    }
    .align-items-xxl-start {
      -webkit-box-align: start !important;
          -ms-flex-align: start !important;
              align-items: flex-start !important;
    }
    .align-items-xxl-end {
      -webkit-box-align: end !important;
          -ms-flex-align: end !important;
              align-items: flex-end !important;
    }
    .align-items-xxl-center {
      -webkit-box-align: center !important;
          -ms-flex-align: center !important;
              align-items: center !important;
    }
    .align-items-xxl-baseline {
      -webkit-box-align: baseline !important;
          -ms-flex-align: baseline !important;
              align-items: baseline !important;
    }
    .align-items-xxl-stretch {
      -webkit-box-align: stretch !important;
          -ms-flex-align: stretch !important;
              align-items: stretch !important;
    }
    .align-content-xxl-start {
      -ms-flex-line-pack: start !important;
          align-content: flex-start !important;
    }
    .align-content-xxl-end {
      -ms-flex-line-pack: end !important;
          align-content: flex-end !important;
    }
    .align-content-xxl-center {
      -ms-flex-line-pack: center !important;
          align-content: center !important;
    }
    .align-content-xxl-between {
      -ms-flex-line-pack: justify !important;
          align-content: space-between !important;
    }
    .align-content-xxl-around {
      -ms-flex-line-pack: distribute !important;
          align-content: space-around !important;
    }
    .align-content-xxl-stretch {
      -ms-flex-line-pack: stretch !important;
          align-content: stretch !important;
    }
    .align-self-xxl-auto {
      -ms-flex-item-align: auto !important;
          -ms-grid-row-align: auto !important;
          align-self: auto !important;
    }
    .align-self-xxl-start {
      -ms-flex-item-align: start !important;
          align-self: flex-start !important;
    }
    .align-self-xxl-end {
      -ms-flex-item-align: end !important;
          align-self: flex-end !important;
    }
    .align-self-xxl-center {
      -ms-flex-item-align: center !important;
          -ms-grid-row-align: center !important;
          align-self: center !important;
    }
    .align-self-xxl-baseline {
      -ms-flex-item-align: baseline !important;
          align-self: baseline !important;
    }
    .align-self-xxl-stretch {
      -ms-flex-item-align: stretch !important;
          -ms-grid-row-align: stretch !important;
          align-self: stretch !important;
    }
    .order-xxl-first {
      -webkit-box-ordinal-group: 0 !important;
          -ms-flex-order: -1 !important;
              order: -1 !important;
    }
    .order-xxl-0 {
      -webkit-box-ordinal-group: 1 !important;
          -ms-flex-order: 0 !important;
              order: 0 !important;
    }
    .order-xxl-1 {
      -webkit-box-ordinal-group: 2 !important;
          -ms-flex-order: 1 !important;
              order: 1 !important;
    }
    .order-xxl-2 {
      -webkit-box-ordinal-group: 3 !important;
          -ms-flex-order: 2 !important;
              order: 2 !important;
    }
    .order-xxl-3 {
      -webkit-box-ordinal-group: 4 !important;
          -ms-flex-order: 3 !important;
              order: 3 !important;
    }
    .order-xxl-4 {
      -webkit-box-ordinal-group: 5 !important;
          -ms-flex-order: 4 !important;
              order: 4 !important;
    }
    .order-xxl-5 {
      -webkit-box-ordinal-group: 6 !important;
          -ms-flex-order: 5 !important;
              order: 5 !important;
    }
    .order-xxl-last {
      -webkit-box-ordinal-group: 7 !important;
          -ms-flex-order: 6 !important;
              order: 6 !important;
    }
    .m-xxl-0 {
      margin: 0 !important;
    }
    .m-xxl-1 {
      margin: 0.25rem !important;
    }
    .m-xxl-2 {
      margin: 0.5rem !important;
    }
    .m-xxl-3 {
      margin: 1rem !important;
    }
    .m-xxl-4 {
      margin: 1.5rem !important;
    }
    .m-xxl-5 {
      margin: 3rem !important;
    }
    .m-xxl-auto {
      margin: auto !important;
    }
    .mx-xxl-0 {
      margin-right: 0 !important;
      margin-left: 0 !important;
    }
    .mx-xxl-1 {
      margin-right: 0.25rem !important;
      margin-left: 0.25rem !important;
    }
    .mx-xxl-2 {
      margin-right: 0.5rem !important;
      margin-left: 0.5rem !important;
    }
    .mx-xxl-3 {
      margin-right: 1rem !important;
      margin-left: 1rem !important;
    }
    .mx-xxl-4 {
      margin-right: 1.5rem !important;
      margin-left: 1.5rem !important;
    }
    .mx-xxl-5 {
      margin-right: 3rem !important;
      margin-left: 3rem !important;
    }
    .mx-xxl-auto {
      margin-right: auto !important;
      margin-left: auto !important;
    }
    .my-xxl-0 {
      margin-top: 0 !important;
      margin-bottom: 0 !important;
    }
    .my-xxl-1 {
      margin-top: 0.25rem !important;
      margin-bottom: 0.25rem !important;
    }
    .my-xxl-2 {
      margin-top: 0.5rem !important;
      margin-bottom: 0.5rem !important;
    }
    .my-xxl-3 {
      margin-top: 1rem !important;
      margin-bottom: 1rem !important;
    }
    .my-xxl-4 {
      margin-top: 1.5rem !important;
      margin-bottom: 1.5rem !important;
    }
    .my-xxl-5 {
      margin-top: 3rem !important;
      margin-bottom: 3rem !important;
    }
    .my-xxl-auto {
      margin-top: auto !important;
      margin-bottom: auto !important;
    }
    .mt-xxl-0 {
      margin-top: 0 !important;
    }
    .mt-xxl-1 {
      margin-top: 0.25rem !important;
    }
    .mt-xxl-2 {
      margin-top: 0.5rem !important;
    }
    .mt-xxl-3 {
      margin-top: 1rem !important;
    }
    .mt-xxl-4 {
      margin-top: 1.5rem !important;
    }
    .mt-xxl-5 {
      margin-top: 3rem !important;
    }
    .mt-xxl-auto {
      margin-top: auto !important;
    }
    .me-xxl-0 {
      margin-right: 0 !important;
    }
    .me-xxl-1 {
      margin-right: 0.25rem !important;
    }
    .me-xxl-2 {
      margin-right: 0.5rem !important;
    }
    .me-xxl-3 {
      margin-right: 1rem !important;
    }
    .me-xxl-4 {
      margin-right: 1.5rem !important;
    }
    .me-xxl-5 {
      margin-right: 3rem !important;
    }
    .me-xxl-auto {
      margin-right: auto !important;
    }
    .mb-xxl-0 {
      margin-bottom: 0 !important;
    }
    .mb-xxl-1 {
      margin-bottom: 0.25rem !important;
    }
    .mb-xxl-2 {
      margin-bottom: 0.5rem !important;
    }
    .mb-xxl-3 {
      margin-bottom: 1rem !important;
    }
    .mb-xxl-4 {
      margin-bottom: 1.5rem !important;
    }
    .mb-xxl-5 {
      margin-bottom: 3rem !important;
    }
    .mb-xxl-auto {
      margin-bottom: auto !important;
    }
    .ms-xxl-0 {
      margin-left: 0 !important;
    }
    .ms-xxl-1 {
      margin-left: 0.25rem !important;
    }
    .ms-xxl-2 {
      margin-left: 0.5rem !important;
    }
    .ms-xxl-3 {
      margin-left: 1rem !important;
    }
    .ms-xxl-4 {
      margin-left: 1.5rem !important;
    }
    .ms-xxl-5 {
      margin-left: 3rem !important;
    }
    .ms-xxl-auto {
      margin-left: auto !important;
    }
    .p-xxl-0 {
      padding: 0 !important;
    }
    .p-xxl-1 {
      padding: 0.25rem !important;
    }
    .p-xxl-2 {
      padding: 0.5rem !important;
    }
    .p-xxl-3 {
      padding: 1rem !important;
    }
    .p-xxl-4 {
      padding: 1.5rem !important;
    }
    .p-xxl-5 {
      padding: 3rem !important;
    }
    .px-xxl-0 {
      padding-right: 0 !important;
      padding-left: 0 !important;
    }
    .px-xxl-1 {
      padding-right: 0.25rem !important;
      padding-left: 0.25rem !important;
    }
    .px-xxl-2 {
      padding-right: 0.5rem !important;
      padding-left: 0.5rem !important;
    }
    .px-xxl-3 {
      padding-right: 1rem !important;
      padding-left: 1rem !important;
    }
    .px-xxl-4 {
      padding-right: 1.5rem !important;
      padding-left: 1.5rem !important;
    }
    .px-xxl-5 {
      padding-right: 3rem !important;
      padding-left: 3rem !important;
    }
    .py-xxl-0 {
      padding-top: 0 !important;
      padding-bottom: 0 !important;
    }
    .py-xxl-1 {
      padding-top: 0.25rem !important;
      padding-bottom: 0.25rem !important;
    }
    .py-xxl-2 {
      padding-top: 0.5rem !important;
      padding-bottom: 0.5rem !important;
    }
    .py-xxl-3 {
      padding-top: 1rem !important;
      padding-bottom: 1rem !important;
    }
    .py-xxl-4 {
      padding-top: 1.5rem !important;
      padding-bottom: 1.5rem !important;
    }
    .py-xxl-5 {
      padding-top: 3rem !important;
      padding-bottom: 3rem !important;
    }
    .pt-xxl-0 {
      padding-top: 0 !important;
    }
    .pt-xxl-1 {
      padding-top: 0.25rem !important;
    }
    .pt-xxl-2 {
      padding-top: 0.5rem !important;
    }
    .pt-xxl-3 {
      padding-top: 1rem !important;
    }
    .pt-xxl-4 {
      padding-top: 1.5rem !important;
    }
    .pt-xxl-5 {
      padding-top: 3rem !important;
    }
    .pe-xxl-0 {
      padding-right: 0 !important;
    }
    .pe-xxl-1 {
      padding-right: 0.25rem !important;
    }
    .pe-xxl-2 {
      padding-right: 0.5rem !important;
    }
    .pe-xxl-3 {
      padding-right: 1rem !important;
    }
    .pe-xxl-4 {
      padding-right: 1.5rem !important;
    }
    .pe-xxl-5 {
      padding-right: 3rem !important;
    }
    .pb-xxl-0 {
      padding-bottom: 0 !important;
    }
    .pb-xxl-1 {
      padding-bottom: 0.25rem !important;
    }
    .pb-xxl-2 {
      padding-bottom: 0.5rem !important;
    }
    .pb-xxl-3 {
      padding-bottom: 1rem !important;
    }
    .pb-xxl-4 {
      padding-bottom: 1.5rem !important;
    }
    .pb-xxl-5 {
      padding-bottom: 3rem !important;
    }
    .ps-xxl-0 {
      padding-left: 0 !important;
    }
    .ps-xxl-1 {
      padding-left: 0.25rem !important;
    }
    .ps-xxl-2 {
      padding-left: 0.5rem !important;
    }
    .ps-xxl-3 {
      padding-left: 1rem !important;
    }
    .ps-xxl-4 {
      padding-left: 1.5rem !important;
    }
    .ps-xxl-5 {
      padding-left: 3rem !important;
    }
    .gap-xxl-0 {
      gap: 0 !important;
    }
    .gap-xxl-1 {
      gap: 0.25rem !important;
    }
    .gap-xxl-2 {
      gap: 0.5rem !important;
    }
    .gap-xxl-3 {
      gap: 1rem !important;
    }
    .gap-xxl-4 {
      gap: 1.5rem !important;
    }
    .gap-xxl-5 {
      gap: 3rem !important;
    }
    .row-gap-xxl-0 {
      row-gap: 0 !important;
    }
    .row-gap-xxl-1 {
      row-gap: 0.25rem !important;
    }
    .row-gap-xxl-2 {
      row-gap: 0.5rem !important;
    }
    .row-gap-xxl-3 {
      row-gap: 1rem !important;
    }
    .row-gap-xxl-4 {
      row-gap: 1.5rem !important;
    }
    .row-gap-xxl-5 {
      row-gap: 3rem !important;
    }
    .column-gap-xxl-0 {
      -moz-column-gap: 0 !important;
      -webkit-column-gap: 0 !important;
              column-gap: 0 !important;
    }
    .column-gap-xxl-1 {
      -moz-column-gap: 0.25rem !important;
      -webkit-column-gap: 0.25rem !important;
              column-gap: 0.25rem !important;
    }
    .column-gap-xxl-2 {
      -moz-column-gap: 0.5rem !important;
      -webkit-column-gap: 0.5rem !important;
              column-gap: 0.5rem !important;
    }
    .column-gap-xxl-3 {
      -moz-column-gap: 1rem !important;
      -webkit-column-gap: 1rem !important;
              column-gap: 1rem !important;
    }
    .column-gap-xxl-4 {
      -moz-column-gap: 1.5rem !important;
      -webkit-column-gap: 1.5rem !important;
              column-gap: 1.5rem !important;
    }
    .column-gap-xxl-5 {
      -moz-column-gap: 3rem !important;
      -webkit-column-gap: 3rem !important;
              column-gap: 3rem !important;
    }
    .text-xxl-start {
      text-align: left !important;
    }
    .text-xxl-end {
      text-align: right !important;
    }
    .text-xxl-center {
      text-align: center !important;
    }
  }
  @media (min-width: 1200px) {
    .fs-1 {
      font-size: 2.5rem !important;
    }
    .fs-2 {
      font-size: 2rem !important;
    }
    .fs-3 {
      font-size: 1.75rem !important;
    }
    .fs-4 {
      font-size: 1.5rem !important;
    }
  }
  @media print {
    .d-print-inline {
      display: inline !important;
    }
    .d-print-inline-block {
      display: inline-block !important;
    }
    .d-print-block {
      display: block !important;
    }
    .d-print-grid {
      display: -ms-grid !important;
      display: grid !important;
    }
    .d-print-table {
      display: table !important;
    }
    .d-print-table-row {
      display: table-row !important;
    }
    .d-print-table-cell {
      display: table-cell !important;
    }
    .d-print-flex {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
    }
    .d-print-inline-flex {
      display: -webkit-inline-box !important;
      display: -ms-inline-flexbox !important;
      display: inline-flex !important;
    }
    .d-print-none {
      display: none !important;
    }
    .sidebar-wrapper, .topbar, .page-footer{
      display: none !important;
    }
    .page-wrapper{
      margin-left:0px;
    }
    .modern-invoice3{
      margin-top:-55px !important;
    }
    .print-row{
      justify-content: space-between !important;
      display: flex !important;
    }
    .print-two2{
      flex-wrap: unset !important;
    }
    .print-two2 > *{
      max-width: 100% !important;
      width: unset !important;
    }
  }
  
  strong {
    font-weight: 600;
  }

  .print-row{
      justify-content: space-between !important;
      display: flex !important;
    }

  hr {
    border-bottom: 1px solid #eeeeef;
    border-top: 0 none;
    margin: 30px 0;
    padding: 0;
  }

  .position-relative {
    position: relative;
  }

  .w-100 {
    width: 100%;
  }

  .text-capitalize {
    text-transform: capitalize;
  }

  .font-600 {
    font-weight: 600 !important;
  }

  .font-500 {
    font-weight: 500 !important;
  }

  .font-400 {
    font-weight: 400 !important;
  }

  .font-700 {
    font-weight: 700 !important;
  }

  .text-title {
    color: var(--primary-title);
  }

  .text-paragraph {
    color: var(--primary-paragraph);
  }

  /*----------------------------------------------------
    Regular invoice
  ----------------------------------------------------*/
  .invoice-wrapper {
    max-width: 980px;
    background-color: #fff;
    border: 1px solid var(secondary-border);
    border-radius: 6px;
    margin: 15px auto;
    padding: 50px;
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .invoice-wrapper {
      padding: 30px;
    }
  }
  @media (max-width: 575px) {
    .invoice-wrapper {
      padding: 20px;
    }
  }

  .modern-invoice {
    max-width: 880px;
    background-color: #fff;
    border: 1px solid var(secondary-border);
    border-radius: 6px;
    padding: 50px;
    overflow: hidden;
  }
  @media (max-width: 991px) {
    .modern-invoice {
      padding: 30px;
      padding-bottom: 40px;
    }
  }
  .modern-invoice .card-header:first-child {
    border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0;
    background-color: var(--primary);
    color: var(--white);
  }

  /*----------------------------------------------------
    Modern invoice
  ----------------------------------------------------*/
  .modern-invoice2 {
    max-width: 880px;
    border-radius: 6px;
    overflow: hidden;
  }
  .modern-invoice2 .card-headers {
    background: var(--primary);
    overflow: hidden;
  }
  .modern-invoice2 .card-header:first-child {
    border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0;
    background-color: var(--primary);
    color: var(--white);
  }
  .modern-invoice2 table thead {
    background: var(--primary);
    color: var(--white);
  }
  .modern-invoice2 .table-striped > tbody > tr:nth-of-type(2n+1) > * {
    --bs-table-accent-bg:none;
  }
  .modern-invoice2 .table-striped > tbody > tr:nth-of-type(even) > * {
    --bs-table-accent-bg: var(--bs-table-striped-bg) !important;
  }
  .modern-invoice2 .left-invoice {
    padding: 19px 50px;
  }
  .modern-invoice2 .right-invoice {
    position: relative;
    z-index: 1;
    padding: 20px 50px;
  }
  .modern-invoice2 .right-invoice::before {
    position: absolute;
    height: 131px;
    width: 400px;
    top: -11px;
    right: -4px;
    overflow: hidden;
    background-color: #000;
    content: "";
    z-index: -1;
    -webkit-clip-path: polygon(20.17% 2.29%, 100% 0%, 99.67% 100.76%, 39.09% 98.48%);
    clip-path: polygon(20.17% 2.29%, 100% 0%, 99.67% 100.76%, 39.09% 98.48%);
  }
  @media (max-width: 575px) {
    .modern-invoice2 .right-invoice::before {
      background: none;
    }
  }

  .modern-invoice3 {
    max-width: 880px;
    background-color: #fff;
    border: 1px solid var(secondary-border);
    border-radius: 6px;
    padding: 50px;
    overflow: hidden;
    border-bottom: 3px solid #000;
  }
  @media (max-width: 991px) {
    .modern-invoice3 {
      padding: 30px;
      padding-bottom: 40px;
    }
  }
  .modern-invoice3 .card-header:first-child {
    border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0;
    background-color: var(--primary);
    color: var(--white);
  }
  .modern-invoice3 .card-headers {
    background: var(--white);
    overflow: hidden;
  }
  .modern-invoice3 table thead {
    background: var(--primary);
    color: var(--white);
  }
  .modern-invoice3 .table-striped > tbody > tr:nth-of-type(2n+1) > * {
    --bs-table-accent-bg:none;
  }
  .modern-invoice3 .table-striped > tbody > tr:nth-of-type(even) > * {
    --bs-table-accent-bg: var(--bs-table-striped-bg) !important;
  }
  .modern-invoice3 .left-invoice {
    padding: 19px 50px;
  }
  .modern-invoice3 .right-invoice {
    position: relative;
    z-index: 1;
    padding: 20px 50px;
  }
  .modern-invoice3 .right-invoice::before {
    position: absolute;
    height: 131px;
    width: 400px;
    top: -11px;
    right: -4px;
    overflow: hidden;
    background-color: #000;
    content: "";
    z-index: -1;
    -webkit-clip-path: polygon(20.17% 2.29%, 100% 0%, 99.67% 100.76%, 39.09% 98.48%);
    clip-path: polygon(20.17% 2.29%, 100% 0%, 99.67% 100.76%, 39.09% 98.48%);
  }
  @media (max-width: 575px) {
    .modern-invoice3 .right-invoice::before {
      background: none;
    }
  }

  .footer-shape {
    display: block;
    -webkit-transform: rotate(-180deg);
    transform: rotate(-180deg);
    height: 200px;
    overflow: hidden;
    width: 150%;
    margin-left: -200px;
    margin-bottom: -57px;
    left: 0;
    right: 0;
    position: relative;
    left: 0;
    right: 0;
    position: relative;
  }
  @media (max-width: 767px) {
    .footer-shape {
      width: 153%;
      height: 100px;
    }
  }
  @media (max-width: 575px) {
    .footer-shape {
      width: 240%;
    }
  }

  .main-wrapper {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    margin: 15px 10px;
    gap: 10px;
  }
  @media (max-width: 1199px) {
    .main-wrapper {
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
    }
  }

  @media (max-width: 1199px) {
    .modern-bill-button .d-print-none {
      -webkit-box-orient: horizontal !important;
      -webkit-box-direction: normal !important;
          -ms-flex-direction: row !important;
              flex-direction: row !important;
      padding-top: 30px;
    }
  }
  .modern-bill-button .d-print-none .btn-primary-fill,
  .modern-bill-button .d-print-none .btn-primary-outline {
    width: 50px;
    padding: 9px 5px;
    line-height: 27px;
    padding-bottom: 0;
  }

  .btn-primary-fill svg,
  .btn-primary-outline svg {
    width: 25px;
  }

  .total-pay {
    background: var(--primary);
    color: #fff;
  }

  .bg-title {
    background: var(--primary-title) !important;
  }

  .text-border {
    border-bottom: 1px solid var(--primary-title);
    display: inline-block;
  }

  .text-uppercase {
    text-transform: uppercase;
  }

  .pa-10 {
    padding: 3px 10px !important;
  }

  /* Width */
  .tm_width_1 {
    width: 8.33333333%;
  }

  .tm_width_2 {
    width: 16.66666667%;
  }

  .tm_width_3 {
    width: 25%;
  }

  .tm_width_4 {
    width: 33.33333333%;
  }

  .tm_width_5 {
    width: 41.66666667%;
  }

  .tm_width_6 {
    width: 50%;
  }

  .tm_width_7 {
    width: 58.33333333%;
  }

  .tm_width_8 {
    width: 66.66666667%;
  }

  .tm_width_9 {
    width: 75%;
  }

  .tm_width_10 {
    width: 83.33333333%;
  }

  .tm_width_11 {
    width: 91.66666667%;
  }

  .tm_width_12 {
    width: 100%;
  }

  .tm_table_responsive {
    overflow-x: auto;
  }
  .tm_table_responsive > table {
    min-width: 600px;
  }

  .tm_50_col > * {
    width: 50%;
    -webkit-box-flex: 0;
        -ms-flex: none;
            flex: none;
  }

  .tm_no_border {
    border: none !important;
  }

  .tm_grid_row {
    display: -ms-grid;
    display: grid;
    grid-gap: 10px 20px;
    list-style: none;
    padding: 0;
  }

  .tm_col_2 {
    -ms-grid-columns: (1fr)[2];
    grid-template-columns: repeat(2, 1fr);
  }

  .tm_col_3 {
    -ms-grid-columns: (1fr)[3];
    grid-template-columns: repeat(3, 1fr);
  }

  .tm_col_4 {
    -ms-grid-columns: (1fr)[4];
    grid-template-columns: repeat(4, 1fr);
  }

  .tm_max_w_150 {
    max-width: 150px;
  }

  .tm_left_auto {
    margin-left: auto;
  }

  hr {
    height: 1px;
    border: none;
    margin: 0;
  }

  .tm_invoice {
    background: #fff;
    border-radius: 10px;
    padding: 50px;
  }

  .card-header {
    padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
    margin-bottom: 0;
    color: var(--bs-card-cap-color);
    background-color: var(--bs-card-cap-bg);
    border-bottom: var(--bs-card-border-width) solid var(--bs-card-border-color);
  }

  .card-header:first-child {
    border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0;
  }

  .card-footer {
    padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
    color: var(--bs-card-cap-color);
    background-color: var(--bs-card-cap-bg);
    border-top: var(--bs-card-border-width) solid var(--bs-card-border-color);
  }

  .signature img {
    max-height: 50px;
  }

  .regular-button .btn-primary-fill {
    background: var(--primary-title);
  }
  .regular-button .btn-primary-fill:hover {
    background: transparent;
    color: var(--primary-title);
    border-color: var(--primary-title);
  }
  .regular-button .btn-primary-fill:focus {
    border-color: var(--primary-title);
    background: var(--primary-title);
    color: #fff !important;
  }
  .regular-button .btn-primary-outline {
    border-color: var(--primary-title);
    color: var(--primary-title);
  }
  .regular-button .btn-primary-outline:hover {
    background: var(--primary-title);
    border-color: transparent;
    color: var(--white);
  }
  .regular-button .btn-primary-outline:focus {
    border-color: var(--primary-title);
    background: var(--primary-title);
    color: #fff !important;
  }

  /*----------------------------------------------
      Index Of All CSS Hera
  ------------------------------------------------

    @version         : 1.0.0
    @Template Name   : init-invoice
    @Template author : 

    :: Regular invoice       
    :: Modern invoice

  ----------------------------------------------------
      End-of CSS
  ----------------------------------------------------*/
  .receipt-wrapper {
    max-width: 340px;
    margin: 30px auto;
    margin-top: 30px;
    padding: 30px 30px;
    background-color: var(--white);
    -webkit-box-shadow: 0px 5px 20px rgba(222, 212, 207, 0.3);
            box-shadow: 0px 5px 20px rgba(222, 212, 207, 0.3);
  }
  .receipt-wrapper .card-header:first-child {
    background-color: var(--primary-title) !important;
    color: var(--white);
  }

  .receipt-top {
    text-align: center;
    margin-bottom: 18px;
  }

  .receipt-heading {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    position: relative;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 500;
    margin: 10px 0;
  }

  .receipt-heading:before {
    content: "";
    position: absolute;
    height: 0;
    width: 100%;
    left: 0;
    top: 46%;
    border-top: 1px dashed #b5b5b5;
  }

  .receipt-heading span {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    padding: 0 5px;
    background-color: var(--white);
    z-index: 1;
    font-weight: 500;
    color: var(--primary-title);
  }

  .text-list.text-style1 {
    list-style: none;
    padding: 0;
    margin: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
  }

  .text-list.text-style1 li {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 50%;
    font-size: 14px;
    line-height: 1.2em;
    margin-bottom: 7px;
  }

  .text-right {
    text-align: right;
    -webkit-box-pack: end;
        -ms-flex-pack: end;
            justify-content: flex-end;
  }

  .text-list-title {
    margin-right: 4px;
  }

  .text-receipt-seperator {
    width: 100%;
    border-top: 1px dashed #b5b5b5;
    margin: 9px 0;
    margin-left: auto;
  }

  .receipt-table {
    width: 100%;
    margin-top: 10px;
    line-height: 1.3em;
  }

  .receipt-table thead th {
    font-weight: 500;
    color: var(--primary-title);
    text-align: left;
    padding: 8px 3px;
    border-top: 1px dashed #b5b5b5;
    border-bottom: 1px dashed #b5b5b5;
  }

  .receipt-table td {
    padding: 4px;
  }

  .receipt-table tbody tr:first-child td {
    padding-top: 10px;
  }

  .receipt-table tbody tr:last-child td {
    padding-bottom: 10px;
    border-bottom: 1px dashed #b5b5b5;
  }

  .receipt-table th:last-child,
  .receipt-table td:last-child {
    text-align: right;
    padding-right: 0;
  }

  .receipt-table th:first-child,
  .receipt-table td:first-child {
    padding-left: 0;
  }

  .receipt-table tr {
    vertical-align: baseline;
  }

  .text-bill-list {
    list-style: none;
    padding: 8px 0;
  }

  .text-bill-list-in {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    text-align: right;
    -webkit-box-pack: end;
        -ms-flex-pack: end;
            justify-content: flex-end;
    padding: 3px 0;
  }

  .text-bill-title {
    padding-right: 20px;
  }

  .text-bill-value {
    width: 90px;
  }

  .text-bill-value.text-bill-focus,
  .text-bill-title.text-bill-focus {
    font-weight: 500;
    color: var(--primary-title);
  }

  .company-name {
    font-weight: 500;
    color: var(--primary-title);
    font-size: 18px;
    line-height: 1.4em;
    margin-bottom: 10px;
  }

  .tm_pos_sample_text {
    text-align: center;
    line-height: 1.6em;
    color: #9c9c9c;
  }

  .tm_pos_sample_text img {
    width: 100%;
  }
</style>

<div class="page-content">
    <main class="main-wrapper position-relative">
      <div class="bill-download">
        <div class="modern-invoice3" id="download-section">
            <!-- invoice Top -->
            <div class="invoice-top">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-center text-sm-start mb-3 mb-sm-1">
                        <img src="https://manauaraly.in/public/web/assets/images/lite-logo.png" title="invoice" alt="invoice" width="15%">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-center text-sm-end mb-3 mb-sm-1">
                        <h4 class=" mb-0 mt-0">Fee Receipt</h4>
                    </div>
                </div>
                <hr>
            </div>
            <hr>
            <!-- invoice Details -->
            <div class="invoice-details pt-20">
                <div class="row1 print-row">
                    <div class="col-sm-6 text-sm-end order-1">
                        <strong class="text-18 mb-3 d-inline-block">Institute </strong>
                        <address class="mb-4">
                            RAMA TECHNICAL INSTITUTE<br>
                            Bhathat Bazar<br>
                            Gorakhpur (U.P) - 273306<br>
                            <b>Email:</b>meraz@rti.in.net<br>
                            <b>Mob No:</b>+91-9161203786<br>
                        </address>
                    </div>
                    <div class="col-sm-6 order-0">
                        <strong class="text-18 mb-3 d-inline-block">Student Detail`s</strong>
                        <address class="mb-4">
                          <b>Reg No:</b> {{$data['student'][0]['reg']}}<br>
                          <b>Name:</b> {{$data['student'][0]['name']}}<br>
                          <b>Course:</b> {{$data['student'][0]['class']}}<br>
                          <b>Mob No:</b> {{$data['student'][0]['mob']}}<br>
                          <b>Address:</b> {{$data['student'][0]['address']}}<br>
                        </address>
                    </div>
                </div>
            </div>
            <!-- invoice Table -->
            <div class="table-responsive invoice-table mb-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th class="black-bg text-right">Unit Cost</th>
                            <th class="black-bg text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pay Fee</td>
                            <td class="text-right">{{$data['fee'][0]['receive_fee']}}</td>
                            <td class="text-right">{{$data['fee'][0]['receive_fee']}}</td>
                        </tr>
                        <tr>
                            <td>Left Fee</td>
                            <td class="text-right">{{$data['fee'][0]['left_due']}}</td>
                            <td class="text-right">{{$data['fee'][0]['left_due']}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row print-two2">
                <div class="col-lg-8 col-md-8 col-sm-6"></div>
                <div class="col-lg-4 col-md-4 col-sm-6 ms-auto">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <strong class="status">Subtotal</strong>
                                </td>
                                <td class="text-right">{{$data['fee'][0]['receive_fee']}} &#8377;</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong class="status">Discount (0%)</strong>
                                </td>
                                <td class="text-right">{{$data['fee'][0]['receive_fee']}} &#8377;</td>
                            </tr>
                            <tr class="total-pay">
                                <td class="border-bottom-0">
                                    <strong>Total</strong>
                                </td>
                                <td class="border-bottom-0 text-right">
                                    <strong>{{$data['fee'][0]['receive_fee']}} &#8377;</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- invoice address -->
            <div class="row">
                <div class="col-sm-12 mb-20">
                    <span class="status d-block mb-20"> <strong>Date :</strong> {{ date('d-m-Y', strtotime($data['fee'][0]['created_at'])) }}</span>
                    <h5 class="mb-2 text-title font-700"> Note: </h5>
                    <p>This is an electronic generated invoice so doesn't require any signature. </p>
                    <p>Please read all terms and polices on https://rti.in.net/ for returns, replacement and other issues.</p>
                </div>
            </div>
            <!-- invoice address -->
            <div class="signature text-right">
                <img src="https://initbill.sai4ul.com/assets/images/sign.svg" alt="img">
                <p>Mr. Meraz Hussain</p>
                <h5 class="text-title font-500 text-18">CEO OF RTI</h5>
            </div>
        </div>
        </div>
        <!-- invoice Bottom  -->
        <div class="text-center modern-bill-button">
            <div class="d-print-none d-flex flex-column justify-content-center flex-wrap gap-10 mt-5"> 
                <a href="javascript:window.print()" class="btn-primary-fill">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect><path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><circle cx="392" cy="184" r="24" fill="currentColor"></circle></svg>
                </a> 
                <button id="bill-download" class="btn-primary-outline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M320 336h76c55 0 100-21.21 100-75.6s-53-73.47-96-75.6C391.11 99.74 329 48 256 48c-69 0-113.44 45.79-128 91.2-60 5.7-112 35.88-112 98.4S70 336 136 336h56M192 400.1l64 63.9 64-63.9M256 224v224.03" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                </button> 
            </div>
        </div>
      </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script> 
    
    <script>
    $(document).ready(function () {  
      var form = $('.bill-download'),  
      cache_width = form.width(),  
      a4 = [595.28, 841.89]; // for a4 size paper width and height  

      $('#bill-download').on('click', function () {  
          generatePDF();  
      });  
      
      function generatePDF() {  
          getCanvas().then(function (canvas) {  
              var img = canvas.toDataURL("image/png"),  
              doc = new jsPDF({  
                  unit: 'px',  
                  format: 'a4'  
              });  
              doc.addImage(img, 'JPEG', 20, 20);  
              doc.save('fee_receipt_{{$data["student"][0]["reg"]}}.pdf');  
              form.width(cache_width);  
          });  
      }  
        
      function getCanvas() {  
          form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');  
          return html2canvas(form, {  
              imageTimeout: 2000,  
              removeContainer: true  
          });  
      }
    });
</script>
        
  @endsection