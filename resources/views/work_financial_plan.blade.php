<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Work & Financial Plan</title>
  <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
</head>
<body class="finance-page">

  <div class="sidebar">
  <h3>Menu</h3>
  <ul>
    <li>
      <a href="{{ route('input_form') }}">
        Input Form
      </a>
    </li>
    <li>
      <a href="{{ route('work_financial_plan') }}" class="active">
        Work & Financial Plan
      </a>
    </li>
    <li>
        <a href="{{ route('logout') }}" class="btnLogout sidebar-link-logout">Logout</a>
    </li>
  </ul>
</div>



  <header>
    <h2 class="Logo">
      <img src="{{ asset('images/logo_dts.png') }}" alt="DTS Logo" class="logo-img" />
      Extension Cluster
    </h2>
  </header>

<table> 
        <tr>
            <th rowspan="2">Programs/Projects/Activities</th>
            <th rowspan="2">Performance Indicators<br><em>(Output level)</em></th>
            <th rowspan="2">Type of<br>Participants/Beneficiaries</th>
            <th colspan="5">Physical Target</th>
            <th colspan="5">Financial Requirement</th>
            <th rowspan="2">Fund Source</th>
            <th rowspan="2">Remarks</th>
        </tr>
        <tr class="sub-header">
            <th>Q1</th>
            <th>Q2</th>
            <th>Q3</th>
            <th>Q4</th>
            <th>Total</th>
            <th>Q1</th>
            <th>Q2</th>
            <th>Q3</th>
            <th>Q4</th>
            <th>Total</th>
        </tr>
        <!-- Sample empty rows -->
        <tr>
            <td>Training Conducted</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td>Training includes Training of Trainers (TOT), Farmers Field School (FFS), Nursery Management Operations, Fisheries Observer Training Course, School on Air (SOA), e-learning courses, and other training activities designed to enhance knowledge, skills, and attitudes of beneficiaries.</td>
        </tr>
        <tr>
            <td>Farmer beneficiaries trained</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
         <tr>
            <td>Fisher beneficiaries trained</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
         <tr>
            <td>AEWs trained</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td>The Agricultural Extension Workers (AEWs) refer specifically to extension workers employed under local government units (LGUs).</td>
        </tr>
         <tr>
            <td>Other AF beneficiaries trained</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td>Other beneficiaries refer to other AF stakeholders, such as members of private sector organizations, professionals engaged in agriculture and fisheries and members of the marginalized sector.</td>
        </tr>
         <tr>
            <td>Marginalized beneficiaries trained</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td>Marginalized beneficiaries include Indigenous People, Person with Disability, Persons Deprived of Liberty, Senior Citizens, Rebel Returnees, and Out-of-School Youth.</td>
        </tr>
         <tr>
            <td>Youth beneficiaries trained</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td>Youth refers to individuals aged 15 to 30 years old based on the National Youth Commission.</td>
        </tr>
         <tr>
            <td>Rural women trained</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td>Rural women are those living in rural areas, including housewives, and agripreneurs, who are offered trainings to improve their knowledge and skills in agriculture and fisheries, enabling them to contribute actively to the sector.</td>
        </tr>
         <tr>
            <td>Other AF related activities conducted</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td>These may refer to knowledge sharing activities aside from training which may include information caravans, technical briefings, seminars, congresses, and summits that aim to increase awareness of Agricultural and Fisheries Extension (AFE) technologies, policies, and updates. </td>
        </tr>
         <tr>
            <td>Scholars given study grants</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td>Individuals awarded financial and academic support to pursue degree or non-degree programs related to agriculture and fisheries, enhancing their competencies in extension and related to agriculture and fisheries.</td>
        </tr>
         <tr>
            <td>Degree Non-DA scholars given study grants</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td>Degree Non-DA Scholars Given Study Grants – Scholars from non-DA institutions granted funding to complete undergraduate or graduate programs that contribute to agricultural and rural development.</td>
        </tr>
         <tr>
            <td>Non-Degree Non-DA scholars given study grants</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td>Non-Degree Non-DA Scholars Given Study Grants – Individuals from non-DA institutions provided with scholarships for short-term training, certifications, or specialized courses aimed at improving technical and leadership skills in agriculture and extension.                                                                                                                                                                                                                               </td>
        </tr>
         <tr>
            <td>AF extension program documents developed</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td>"
Extension program documents include the Extension/Training Program Design, Modules, Facilitator's Guide, Training Curriculum, and other related materials."


</td>
        </tr>
         <tr>
            <td>AF extension program documents enhanced</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td>"
Extension program documents include the Extension/Training Program Design, Modules, Facilitator's Guide, Training Curriculum, and other related materials."


</td>
        </tr>
         <tr>
            <td>AF extension program documents reproduced</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td>"
Extension program documents include the Extension/Training Program Design, Modules, Facilitator's Guide, Training Curriculum, and other related materials."


</td>
        </tr>
         <tr>
            <td>AF extension program documents disseminated</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td>"
Extension program documents include the Extension/Training Program Design, Modules, Facilitator's Guide, Training Curriculum, and other related materials."


</td>
        </tr>
         <tr>
            <td>Technology demonstration established</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
         <tr>
            <td>Technology demonstration maintained</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
         <tr>
            <td>Learning site established</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
         <tr>
            <td>Learning site maintained</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
         <tr>
            <td>Urban garden established</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
         <tr>
            <td>Knowledge products  developed</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
         <tr>
            <td>Print</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
         <tr>
            <td>Digital Media</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
         <tr>
            <td>Knowledge products  enhanced</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
         <tr>
            <td>Print</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
         <tr>
            <td>Digital Media</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
         <tr>
            <td>Knowledge products  reproduced</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
         <tr>
            <td>Print</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
         <tr>
            <td>Digital Media</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
         <tr>
            <td>Knowledge products  disseminated</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
        <tr>
            <td>Print</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
        <tr>
            <td>Digital Media</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
        <tr>
            <td>Farm business advisory services rendered</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
        <tr>
            <td>Clients reached</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
        <tr>
            <td>Technical assistance provided</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
        <tr>
            <td>Clients assisted</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
        <tr>
            <td>Extension-related studies conducted</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
        <tr>
            <td>Extension-related studies funded</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
        <tr>
            <td>Extension standards (manual) approved</td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
        <tr>
            <td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td><td></td><td></td><td></td>
            <td></td><td></td>
        </tr>
    </table>
  <!-- Modal -->
  <div id="modal" class="modal">
    <div class="modal-content">
      <form id="modalForm">
        <div class="modal-body-grid" id="modal-body">
          <!-- JavaScript will insert labeled inputs here -->
        </div>
        <div class="modal-actions">
          <button type="button" id="modalCancelBtn" class="cancel-btn">Cancel</button>
          <button type="submit" class="save-btn">Save</button>
        </div>
      </form>
    </div>
  </div>

  <<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/work_financial_plan.js') }}"></script>

</body>
</html>
