
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   <div>
        <button type="button" class="btn  btn-lg " style=" background-color:#117864;color:#D1F2EB" data-bs-toggle="modal" data-bs-target="#myCreate">Create</button>
            <div class="modal fade pt-5 w-100" id="myCreate" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title fw-bold" style="color: #0e6251">Create</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="" novalidate class="was-validated" enctype="multipart/form-data">
                            <label for="criteria1" style="font-size:10px;">Design</label><input type="number" name="criteria1" id="criteria_design" min="0" max="100" value="0" ><br><br>
                            <label for="criteria1" style="font-size:20px;">1.1.1  Curricula developed and implemented have relevance to the local,
                              national, regional and global developmental needs, which is reflected in the Programme outcomes (POs), and Course Outcomes(COs) of the Programmes offered by the University(20)</label>
                            <input type="number" name="criteria1" id="criteria11" min="0" max="100" value="0" onchange="calculate_naac_grade_design()"><br>
                            <label for="criteria1" style="font-size:20px;">1.1.2  The Programmes offered by the institution focus on employability/
                              entrepreneurship/ skill development and their course syllabi are adequately revised to incorporate contemporary requirements(30)</label>
                            <input type="number" name="criteria1" id="criteria12" min="0" max="100" value="0" onchange="calculate_naac_grade_design()"><br>
                          </form>
                        </div>
                      <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
       </div>