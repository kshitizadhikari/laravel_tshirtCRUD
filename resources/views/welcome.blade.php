<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
       
        body {
            background-color: grey;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container{
            height: 100vh;
            width: 100%;
            background-color: #04AA6D;
            position: relative;
        }

        .header{
            padding: 40px;
            text-align: center;
        }
        
        .main{
            position: relative;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            padding: 20px;
            margin: auto;
        }

        .formko{
            width: 30vw;
            border: 2px solid black;
            border-radius: 1rem;
            background-color: #CCC8C8;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            padding: 20px 40px;
            position: relative;
        }

        .form-control{
            /* position: absolute; */
            width: 20vw;
            border: 1px solid black;
        }

        .form-control.date{
            width: 10rem;
        }
    
        /* TABLE KO SECTION  */
        .tableko{
            position: absolute;
            right: 5px;
            padding: 20px;
            width: 53%;
        }
        
        .table{
            border: 2px solid #06173D;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }

        
    </style>
    <title>OutDoor Tshirt Company</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="heading">
                <h1>OutDoor Tshirt Company</h1>
            </div>
        </div>
        <div class="main">
            <!-- FORM KO SECTION -->
            <section class="formko">
                <form action="{{route('saveBatch')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="batchNo" class="form-label">Enter Batch No</label>
                        <input type="text" class="form-control" id="batchNo" name="batchNo">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="qty" class="form-label">Enter Quantity</label>
                        <input type="text" class="form-control" id="qty" name="qty">
                    </div>
                    <div class="mb-3">
                        <label for="createdAt" class="form-label">Select Created At Date</label>
                        <input type="date" class="form-control date" id="createdAt" name="createdAt">
                    </div>
                    <div class="mb-3">
                        <label for="Status" class="form-label">Select Status</label><br>
                            <select name="status">
                                <option value="good">Good</option>
                                <option value="bad">Bad</option>
                                <option value="average">Average</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="remarks" class="form-label">Enter Remarks</label><br>
                        <textarea name="remarks" rows="4" cols="50"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </section>

            <!-- TABLE KO SECTION  -->
            <section class="tableko">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Batch No</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Remark</th>
                        <th scope="col">Action</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $value)
                        <tr>
                            <td>{{$value->BatchNo}}</td>
                            <td>{{$value->Qty}}</td>
                            <td>{{$value->createdAt}}</td>
                            <td>{{$value->Status}}</td>
                            <td>{{$value->Remarks}}</td>
                            <td><a href="">Edit</a></td>
                            <td><a href="{{url('/delete/' . $value->id )}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
            </section>
        </div>
    </div>
</body>
</html>