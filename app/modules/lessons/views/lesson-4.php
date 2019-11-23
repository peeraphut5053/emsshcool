<?php $this->load->view('site/header'); ?>
    <div class="wrapper profile-page">
        <div class="page-header header-filter header-small" data-parallax="active" style="background-image: url('<?php echo base_url('static/img/cover.jpg'); ?>');"></div>
        <div class="main main-raised">
        <div class="profile-content">
            <div class="container">

                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                       <div class="profile">
                            <div class="avatar">
                            <?php
                                if($this->session->userdata('fb_id') !=''){
                                    $avatar = 'https://graph.facebook.com/'.$this->session->userdata('fb_id').'/picture?height=300&width=300';
                                }else{
                                    $avatar = base_url('static/img/faces/christian.jpg');
                                }                          
                            ?>
                                <img src="<?php echo $avatar; ?>" alt="Circle Image" class="img-circle img-responsive img-raised">
                            </div>
                            <div class="name">
                                <h3 class="title"><?php echo $this->session->userdata('name'); ?></h3>                              
                            </div>
                        </div>
                    </div>                    
                </div>                
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="profile-tabs">
                            <div class="nav-align-center">
                                <?php $this->load->view('lessons/menu'); ?>
                            </div>
                        </div>
                        <!-- End Profile Tabs -->
                    </div>
                </div>
                <div class="tab-content">                   
                    <div class="tab-pane active work" id="article">
                        <div>
                        <h2 class="text-center title">หน่วยที่ 4. </h2>
                        <h2 class="text-center title">การช่วยฟื้นคืนชีพขั้นพื้นฐาน (CPR) และการใช้เครื่องกระตุกหัวใจด้วยไฟฟ้า (AED)</h2>
                            <div class="col-md-8 col-md-offset-2">                             
                                <div class="row collections">
                                    <p>
                                    การกู้ฟื้นคืนชีพ (Cardio Pulmonary Resuscitation; CPR) คือ การช่วยชีวิตคนหัวใจหยุดเต้นหรือคนที่หยุดหายใจกะทันหัน โดยใช้เพียงแรงกดหน้าอกและการช่วยหายใจเพื่อให้หัวใจและระบบหายใจกลับมาทำงานอีกครั้ง จะได้ผลดี ต้องทำภายใน 4 นาที หลังผู้ป่วยหยุดหายใจ ทั้งนี้ภาวะหัวใจหยุดเต้นหรือหยุดหายใจเกิดได้จากหลายสาเหตุ เช่น  หัวใจวายเฉียบพลัน  ภาวะกล้ามเนื้อหัวใจขาดเลือดเฉียบพลัน สำลักควันไฟ  ได้รับยาเกินขนาด                              สิ่งแปลกปลอมอุดกั้นทางเดินหายใจ ไฟฟ้าดูด สมองเสียการทำงานจนโคม่าจากสาเหตุต่างๆ  จมน้ำ อยู่ในที่อับอากาศได้รับบาดเจ็บรุนแรง ฟ้าผ่า เป็นต้น 
                                    </p>
                                    <p>
                                    <h4 class="title" style="color:#9c27b0">4.1 การช่วยฟื้นคืนชีพขั้นพื้นฐาน CPR</h4>
                                    </p>
                                    <p>
                                    เมื่อเจอผู้ประสบเหตุฉุกเฉิน ผู้พบเห็นก่อนเข้าไปช่วยเหลือให้ปฏิบัติตามหลัก คือ Stop = หยุด, Breathe= ตั้งสติ (ควบคุมการหายใจ), Think = คิด, Act = แล้วลงมือทำ ที่สำคัญคือห้ามพรวดพลาดเข้าไปเด็ดขาด โดยการช่วยเหลือต้องคำนึงถึงความปลอดภัยของผู้ช่วยเหลือด้วย ขั้นตอนเมื่อเจอผู้ประสบเหตุฉุกเฉิน มีดังนี้
1. การประเมินความปลอดภัย ณ จุดเกิดเหตุ เช่น ไฟ ควัน น้ำมัน แก๊ส พื้นไม่เปียกน้ำ สถานการณ์ปลอดภัย
                                    </p>
                                    <p>
                                    2. ปลุกเรียกผู้ป่วย/ดูการตอบสนอง ตามองที่หน้า ตะโกนเรียกผู้ป่วยด้วยเสียงดังๆ และถามเพื่อดูการตอบสนอง 
ถ้าผู้ป่วยไม่ตอบสนอง ให้ใช้ 2 มือตบที่ไหล่ของผู้ป่วย 3 ครั้ง 2 รอบ ถ้ารู้ชื่อให้เรียกชื่อ... ไม่รู้ชื่อเรียก “คุณ” ถ้าผู้ป่วยยังคงไม่ตอบสนอง ให้ตะโกนขอความช่วยเหลือดังๆ ทันที (เพื่อดึงความสนใจของคนบริเวณนั้น) ห้ามทิ้งผู้ป่วย ทั้งนี้ ห้ามเขย่าที่ไหล่หรือลำตัว
                                    </p>
                                    <p>
                                    3. ตะโกนร้องขอความช่วยเหลือ/ถ้ามีคนอยู่หลายคน ถ้าท่านอยู่คนเดียว ให้โทร 1669 ติดต่อระบบการแพทย์ฉุกเฉิน ทันที โดยแจ้งข้อมูล คือ เกิดเหตุอะไร เกิดเหตุที่ไหน มีผู้ป่วยกี่คน สภาพของผู้ป่วยขณะนั้นเป็นอย่างไร
กำลังให้การช่วยเหลืออย่างไรในขณะนั้น หรืออาจแจ้งให้นำเครื่อง AED มาด้วย                                    </p>
                                    <p>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โดยการแข่งขัน EMS Rally แบ่งการแข่งขันออกเป็นประเภทการแข่งขัน เช่น 
ประเภททีมชุดปฏิบัติการฉุกเฉินระดับสูง ( Advance Life Support : ALS) , ประเภททีมชุดปฏิบัติการฉุกเฉินเบื้องต้น ( First Responder : FR )  ซึ่ง ในแต่ละประเภทจะมีทีมตัวแทนจากระดับเขตเข้าร่วมแข่งขัน โดยแต่ละทีมจะต้อง เข้าร่วมทํากิจกรรมในฐานที่ได้มีการจําลองสถานการณ์ฉุกเฉินที่ครอบคลุมทั้งการบาดเจ็บ ป่วยฉุกเฉิน และ สาธารณภัย รวมทั้งสิ้น 12 ฐาน เพื่อให้ผู้เข้าร่วมแข่งขันได้แสดงความรู้ความสามารถในการวิเคราะห์ข้อมูล การสั่งการ การประเมินและควบคุมสถานการณ์ การยกและเคลื่อนย้ายผู้ป่วย การสื่อสาร และการทํางาน เป็นทีม โดยใช้หลักการช่วยเหลือผู้ป่วยฉุกเฉินนอกโรงพยาบาลตามมาตรฐานระบบการแพทย์ฉุกเฉินของ ประเทศไทย เพื่อหาทีมที่มีความพร้อมและความสามารถในการปฏิบัติการการแพทย์ฉุกเฉินที่ดีที่สุดใน
                                    </p>
                                    <p>5. ทำการกดหน้าอกทันที ตามขั้นตอนการทำ CPR โดยให้กดหน้าอกอย่างต่อเนื่อง 200 ครั้ง (นับ 1 ถึง 100 จำนวน 2 รอบ หรือประมาณ 2 นาที) ครบแล้วให้ประเมินซ้ำ ถ้าผู้ป่วยยังไม่หายใจให้ปั๊มต่อไปจนกว่ารถกู้ชีพจะมาถึง ทั้งนี้ก่อนการกดหน้าอกควรจัดให้ผู้ป่วยนอนหงายบนพื้นราบแข็ง ถ้าพื้นอ่อนนุ่มให้สอดแผ่นกระดานแข็งใต้ลำตัว นอกจากนี้หากสะดวกใจในการเป่าปากให้กดหน้าอก 30 ครั้งสลับกับการเป่าปาก 2 ครั้ง จนครบ 5 รอบ
                                    </p>
                                    <p>
                                    6. การจะหยุดกดหน้าอกก็ต่อเมื่อ 1) มองเห็นสัญญาณของการมีชีวิต เช่น ผู้ป่วยหายใจ ไอ ลืมตา เคลื่อนไหว ซึ่งหมายถึงการมีชีวิต 2) หน่วยแพทย์ฉุกเฉินมาทำหน้าที่แทน 3) เหนื่อยมากจนทำต่อไปไม่ไหว 4) แพทย์สั่งยุติการช่วยชีวิต
                                    </p>
                                    <p>
                                    
                                    <br/>
                                    <div class="row collections">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img src="<?php echo base_url('static/img/lesson/less-4-1.jpg')?>" class="img-responsive" alt="">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="<?php echo base_url('static/img/lesson/less-4-2.jpg')?>" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                        <br/>
                                    </div>
                                    <div class="col-sm-12">
                                            <img src="<?php echo base_url('static/img/lesson/less-4-3.jpg')?>" class="img-responsive" alt="">
                                    </div>
                                    <div>
                                        <h4 class="title" style="color:#9c27b0">4.2 การใช้เครื่องกระตุ้นหัวใจด้วยไฟฟ้าแบบอัตโนมัติ (AUTOMATED EXTERNAL DEFIBRILLATOR; AED) </h4>

                                    </div>
                                    <div>
                                    AED เป็นเครื่องอัตโนมัติที่สามารถอ่านคลื่นหัวใจขณะที่หัวใจหยุดเต้นกะทันหันและสามารถกระตุ้นให้หัวใจกลับมาเต้นเป็นปกติ ทั้งนี้เมื่อเกิดภาวะหัวใจหยุดเต้นกะทันหันหัวใจจะบีบตัวผิดจังหวะอย่างรุนแรง หัวใจห้องล่างสั่นระริกไม่สามารถสูบฉีดเลือดได้ การกระตุ้นด้วยไฟฟ้าจะทำให้หัวใจกลับมาเต้นเป็นจังหวะปกติอีกครั้ง
สำหรับเครื่อง AED เป็นเครื่องมือ ที่ใช้ระบบปฏิบัติการแบบอิเล็กทรอนิกส์พกพา ซึ่งประชาชนทั่วไปที่ได้รับการฝึกฝนการใช้ก็สามารถใช้เครื่องนี้ได้ ภายใต้คำแนะนำของผู้ปฏิบัติการทางการแพทย์ฉุกเฉินผ่านสายด่วน1669 โดยเมื่อมีการเปิดการใช้งานของเครื่อง AED เครื่อง ก็จะสามารถวินิจฉัยภาวะหัวใจเต้นผิดจังหวะที่เป็นอันตรายถึงชีวิตได้ และสามารถให้การรักษาด้วยการช็อกไฟฟ้ากระตุกหัวใจได้โดยใช้กระแสไฟฟ้าหยุด รูปแบบการเต้นของหัวใจที่ผิดจังหวะ เพื่อเปิดโอกาสให้หัวใจกลับมาเต้นใหม่ในจังหวะที่ถูกต้องได้ โดยการรักษานั้นระบบอิเล็กทรอนิกส์ในเครื่องจะออกคำสั่งให้เราเป็นผู้ ปฏิบัติตามได้ 
ขั้นตอนการใช้เครื่อง AED
1. ผู้ที่ทำการช่วยเหลือจะต้องเปิดฝาเครื่อง AED 
2. ฉีกซองบรรจุอิเล็คโทรด โดยแผ่นอิเล็คโทรดจะมีอยู่ 2 ชิ้น คือ ชิ้นแรกจะต้องนำไปติดบนทรวงอกตอนบนของผู้ป่วย และแผ่นที่สองจะต้องติดบนผิวทรวงอกตอนล่างของผู้ป่วย 
3. เสียบปลั๊กเข้ากับเครื่อง AED 
4. เครื่อง AED จะ ทำการวิเคราะห์จังหวะการเต้นของหัวใจ ซึ่งขณะนี้ห้ามผู้ที่ช่วยเหลือสัมผัสตัวผู้ป่วยเด็ดขาด 
5. จากนั้นเมื่อเครื่องวินิจเสร็จเสร็จแล้วจะขึ้นสัญญาณให้ทำการช็อคไฟฟ้า ให้ผู้ช่วยเหลือกดที่ปุ่มช็อคตามสัญญาณที่ปรากฏอยู่บนตัวเครื่อง และสลับกับการช่วยเหลือฟื้นคืนชีพผู้ป่วยหรือ CPR อย่างต่อเนื่อง จนกว่าเจ้าหน้าที่กู้ชีพจะมาถึง โดยการช่วยเหลือควรทำภายใน 3-5 นาที จะช่วยเพิ่มโอกาสการรอดชีวิตของผู้ป่วยฉุกเฉินได้มากขึ้น แต่กรณีถ้าเครื่องสั่งว่า “ไม่แนะนำให้ทำการช็อก ให้ทำ CPR ต่อไป” ให้รีบกดหน้าอกต่อทันที

                                    </div>
                                    <div class="col-sm-12">
                                            <img src="<?php echo base_url('static/img/lesson/less-4-4.jpg')?>" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                     
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('site/footer'); ?>