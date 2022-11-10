<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            /* margin: 10px 13px; */
           
        }

        .people {
            padding: 15px 10px;
            border: 1px solid rgb(78, 78, 78);
            margin: 10px auto;
            border-radius: 12px;
        }

        .modal-footer button {
            margin: 5px 25px;
            /* width: 50%; */
            padding: 7px 200px;
        }

        .modal-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>

    <title>edit</title>
</head>

<body>

    <div class="container people">


        <form action="./php/add_reports.php" method="post" enctype="multipart/form-data">
            <div class="h2">Medical Reports No. 1</div>

            <div class="container mt-3">
                <label for="exampleDataList" class="form-label">Patients's Username</label>
                <input class="form-control border border-2 border-success" list="datalistOptions" id="exampleDataList"
                    name="pusername" placeholder="Type Username to search...">

                <div class="form-group mt-3 ">
                    <label for="exampleFormControlInput1">Patients's Email address</label>
                    <input type="email" class="form-control border border-2 border-success" name="pemail"
                        id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlSelect1">Witness(साक्षी) if Any </label>
                    <select class="form-control border border-2 border-success" id="exampleFormControlSelect1"
                        name="witness">
                        <option value="No-one">No-one</option>
                        <option value="Father">Father</option>
                        <option value="Mother">Mother</option>
                        <option value="Sister">Sister</option>
                        <option value="Brother">Brother</option>
                        <option value="Friends">Friends</option>
                        <option value="Staff">Staff</option>
                        <option value="someone">Other</option>
                    </select>
                </div>

                <div class="form-group mt-3">
                    <label for="exampleFormControlTextarea1">Symptoms Of The Patient</label>
                    <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1"
                        rows="5" name="symptoms"></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlTextarea1">Description Of The Disease</label>
                    <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1"
                        rows="7" name="disease"></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlTextarea1">Description Of Medicines</label>
                    <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1"
                        rows="5" name="medicine"></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlTextarea1">Necessary Medical Reports</label>
                    <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1"
                        rows="5" name="reports"></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlTextarea1">Instruction Regarding Diet</label>
                    <textarea class="form-control border border-2 border-success" id="exampleFormControlTextarea1"
                        rows="5" name="diet"></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="exampleFormControlInput1">Next Visit Date</label>
                    <input type="datetime-local" class="form-control border border-2 border-success"
                        id="exampleFormControlInput1" placeholder="dd/mm/yyyy" name="visit_date">
                </div>


                <!-- Report photo  -->

                <div class="form-group mt-3">
                    <label for="exampleFormControlFile1">Input the File Photo (Everything_All_About_Disease)</label>
                    <input type="file" class="form-control-file border border-2 border-success"
                        id="exampleFormControlFile1" name="photo">
                </div>

                <!-- report photo End here  -->
                <hr style="height: 2px ;">

                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Update</button>
                    <button type="button" class="btn btn-danger data-bs-dismiss=" modal">Delete</button>
                </div>
            </div>
        </form>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>