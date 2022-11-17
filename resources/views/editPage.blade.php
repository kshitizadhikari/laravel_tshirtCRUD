<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
            align-items: center;
            justify-content: center;
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
        }

        .form-control{
            /* position: absolute; */
            width: 20vw;
            border: 1px solid black;
        }

        .form-control.date{
            width: 10rem;
        }
    </style>
    
    <title>Edit Page</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="heading">
                <h1>OutDoor Tshirt Company Edit Page</h1>
            </div>
        </div>
        <div class="main">
            <!-- FORM KO SECTION -->
            <section class="formko">
                <form action="{{ route('update') }}" method="post">
                    @csrf
                    <input type="hidden" class="form-control" name="id" value="{{$data->id}}">
                    <div class="mb-3">
                        <label for="batchNo" class="form-label">Enter New Batch No</label>
                        <input type="text" class="form-control" id="batchNo" name="batchNo" value="{{$data->BatchNo}}">
                        <div id="battc" class="form-text">This must be entered carefully</div>
                    </div>
                    <div class="mb-3">
                        <label for="qty" class="form-label">Enter New Quantity</label>
                        <input type="text" class="form-control" id="qty" name="qty" value="{{$data->Qty}}">
                    </div>
                    <div class="mb-3">
                        <label for="createdAt" class="form-label">Select New Created At Date</label>
                        <input type="date" class="form-control date" id="createdAt" name="createdAt" value="{{$data->createdAt}}">
                    </div>
                    <div class="mb-3">
                        <label for="Status" class="form-label">Select New Status</label><br>
                            <select name="status">
                                <option value="good">Good</option>
                                <option value="bad">Bad</option>
                                <option value="average">Average</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="remarks" class="form-label">Enter New Remarks</label><br>
                        <textarea name="remarks" rows="4" cols="50" value="$data->Remarks"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </section>
        </div>
</body>
</html>