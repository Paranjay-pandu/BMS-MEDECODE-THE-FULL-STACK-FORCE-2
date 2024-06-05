<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Custom Styles */
        body {
            background-color: #f2f2f2; /* Light gray background */
        }

        .card {
            background-color: #d4edda; /* Light green */
            border: none;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .grid-container {
            padding: 20px;
        }

        h2 {
            color: #2c3e50; /* Dark blue for headings */
        }

        label {
            color: #34495e; /* Dark blue for labels */
        }

        input[type="submit"] {
            background-color: #28a745; /* Green submit button */
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%; /* Make button full width */
        }

        input[type="submit"]:hover {
            background-color: #218838; /* Darker green on hover */
        }

        .edit-button, .save-button, .cancel-button {
            background-color: #ffc107; /* Yellow edit button */
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%; /* Make button full width */
            margin-top: 10px; /* Add some space above the button */
        }

        .save-button:hover, .cancel-button:hover {
            background-color: #e0a800; /* Darker yellow on hover */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center grid-container">
        <div class="col-md-6">
            <div class="card">
                <h2>Call me Medicine</h2>
                <label><input type="checkbox"> Tablet Taken?</label><br>
                <input type="submit" value="Submit">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <h2>Patient Details</h2>
                <div id="patient-view">
                    <p><strong>ID:</strong> <span id="patient-id">unique identifier</span></p>
                    <p><strong>Gender:</strong> <span id="patient-gender">Male, Female or Other</span></p>
                    <p><strong>Age:</strong> <span id="patient-age">age of the patient</span></p>
                    <p><strong>Hypertension:</strong> <span id="patient-hypertension">No or Yes</span></p>
                    <p><strong>Heart Disease:</strong> <span id="patient-heart-disease">No or Yes</span></p>
                    <p><strong>Ever Married:</strong> <span id="patient-ever-married">No or Yes</span></p>
                    <p><strong>Work Type:</strong> <span id="patient-work-type">children, Govt_job, Never_worked, Private or Self-employed</span></p>
                    <p><strong>Residence Type:</strong> <span id="patient-residence-type">Rural or Urban</span></p>
                    <p><strong>Avg Glucose Level:</strong> <span id="patient-avg-glucose-level">average glucose level in blood</span></p>
                    <p><strong>BMI:</strong> <span id="patient-bmi">body mass index</span></p>
                    <p><strong>Smoking Status:</strong> <span id="patient-smoking-status">formerly smoked, never smoked, smokes or Unknown</span></p>
                    <p><strong>Stroke:</strong> <span id="patient-stroke">No or Yes</span></p>
                    <button class="edit-button" onclick="editPatientDetails()">Edit</button>
                </div>
                <div id="patient-edit" style="display: none;">
                    <form id="patient-form">
                        <div class="mb-3">
                            <label for="edit-id" class="form-label">Phone No.</label>
                            <input type="text" class="form-control" id="edit-id">
                        </div>
                        <div class="mb-3">
                            <label for="edit-gender" class="form-label">Gender</label>
                            <select class="form-select" id="edit-gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit-age" class="form-label">Age</label>
                            <input type="number" class="form-control" id="edit-age">
                        </div>
                        <div class="mb-3">
                            <label for="edit-hypertension" class="form-label">Hypertension</label>
                            <select class="form-select" id="edit-hypertension">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit-heart-disease" class="form-label">Heart Disease</label>
                            <select class="form-select" id="edit-heart-disease">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit-ever-married" class="form-label">Ever Married</label>
                            <select class="form-select" id="edit-ever-married">
                                <option value="No">No</option>
                                <option value="Yes">Yes</select>
                        </div>
                        <div class="mb-3">
                            <label for="edit-work-type" class="form-label">Work Type</label>
                            <select class="form-select" id="edit-work-type">
                                <option value="children">children</option>
                                <option value="Govt_job">Govt_job</option>
                                <option value="Never_worked">Never_worked</option>
                                <option value="Private">Private</option>
                                <option value="Self-employed">Self-employed</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit-residence-type" class="form-label">Residence Type</label>
                            <select class="form-select" id="edit-residence-type">
                                <option value="Rural">Rural</option>
                                <option value="Urban">Urban</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit-avg-glucose-level" class="form-label">Avg Glucose Level</label>
                            <input type="number" step="0.1" class="form-control" id="edit-avg-glucose-level">
                        </div>
                        <div class="mb-3">
                            <label for="edit-bmi" class="form-label">BMI</label>
                            <input type="number" step="0.1" class="form-control" id="edit-bmi">
                        </div>
                        <div class="mb-3">
                            <label for="edit-smoking-status" class="form-label">Smoking Status</label>
                            <select class="form-select" id="edit-smoking-status">
                                <option value="formerly smoked">formerly smoked</option>
                                <option value="never smoked">never smoked</option>
                                <option value="smokes">smokes</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit-stroke" class="form-label">Stroke</label>
                            <select class="form-select" id="edit-stroke">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                        <button type="button" class="save-button" onclick="savePatientDetails()">Save</button>
                        <button type="button" class="cancel-button" onclick="cancelEdit()">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function editPatientDetails() {
        document.getElementById('patient-view').style.display = 'none';
        document.getElementById('patient-edit').style.display = 'block';
        document.getElementById('edit-id').value = document.getElementById('patient-id').innerText;
        document.getElementById('edit-gender').value = document.getElementById('patient-gender').innerText;
        document.getElementById('edit-age').value = document.getElementById('patient-age').innerText;
        document.getElementById('edit-hypertension').value = document.getElementById('patient-hypertension').innerText;
        document.getElementById('edit-heart-disease').value = document.getElementById('patient-heart-disease').innerText;
        document.getElementById('edit-ever-married').value = document.getElementById('patient-ever-married').innerText;
        document.getElementById('edit-work-type').value = document.getElementById('patient-work-type').innerText;
        document.getElementById('edit-residence-type').value = document.getElementById('patient-residence-type').innerText;
        document.getElementById('edit-avg-glucose-level').value = document.getElementById('patient-avg-glucose-level').innerText;
        document.getElementById('edit-bmi').value = document.getElementById('patient-bmi').innerText;
        document.getElementById('edit-smoking-status').value = document.getElementById('patient-smoking-status').innerText;
        document.getElementById('edit-stroke').value = document.getElementById('patient-stroke').innerText;
    }

    function savePatientDetails() {
        document.getElementById('patient-id').innerText = document.getElementById('edit-id').value;
        document.getElementById('patient-gender').innerText = document.getElementById('edit-gender').value;
        document.getElementById('patient-age').innerText = document.getElementById('edit-age').value;
        document.getElementById('patient-hypertension').innerText = document.getElementById('edit-hypertension').value;
        document.getElementById('patient-heart-disease').innerText = document.getElementById('edit-heart-disease').value;
        document.getElementById('patient-ever-married').innerText = document.getElementById('edit-ever-married').value;
        document.getElementById('patient-work-type').innerText = document.getElementById('edit-work-type').value;
        document.getElementById('patient-residence-type').innerText = document.getElementById('edit-residence-type').value;
        document.getElementById('patient-avg-glucose-level').innerText = document.getElementById('edit-avg-glucose-level').value;
        document.getElementById('patient-bmi').innerText = document.getElementById('edit-bmi').value;
        document.getElementById('patient-smoking-status').innerText = document.getElementById('edit-smoking-status').value;
        document.getElementById('patient-stroke').innerText = document.getElementById('edit-stroke').value;

        document.getElementById('patient-view').style.display = 'block';
        document.getElementById('patient-edit').style.display = 'none';
    }

    function cancelEdit() {
        document.getElementById('patient-view').style.display = 'block';
        document.getElementById('patient-edit').style.display = 'none';
    }
</script>

</body>
</html>
