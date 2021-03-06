<!DOCTYPE html>
<html>
    <head>
        <title>Joyce Pinilla</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css">  
        <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Praise&family=Yuji+Syuku&family=IBM+Plex+Mono&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        </head>
    <body> 
    <nav>
            <ul>
                <li><a href="/" class="active">home</a></li>
                <li><a href="#skills" class="nav-link">skills</a></li>
                <li><a href="/resume.php" class="nav-link">resume</a></li>
                <li><a href="/references.php" target="_blank" class="nav-link">references</a></li>
                <li><a href="https://instagram.com/joyce.pinillaa/" target="_blank" class="nav-link">instagram</a></li>
                <li><a href="/contact.php" class="nav-link">contact</a></li>
            
            </ul>
        </nav>
        <header>
          <div>
              <h1 style="text-align:center;">references</h1>
          </div>
        </header>

        <div>
            <table class="table table-striped">
                <thead style="text-transform:uppercase;">
                  <tr>
                    <th></th>
                    <th>First</th>
                    <th>Last</th>
                    <th>Relationship</th>
                    <th>Phone #</th>
                    <th>E-Mail</th>
                  </tr>
                </thead>
                <tbody id="tableref">
                </tbody>
              </table>
        </div>

        <script>      
const references = [
  {
    first: 'Mabel',
    last: 'Oyarzun',
    relation: 'Mother',
    phone: '8019136727',
    email: 'email@email.com',
  },
  {
    first: 'Robinson',
    last: 'Pinilla',
    relation: 'Father',
    phone: '8019136727',
    email: 'email@email.com',
  },
  {
    first: 'Tori',
    last: 'Allen',
    relation: 'Former Boss',
    phone: '8019136727',
    email: 'email@email.com',
  },
  {
    first: 'Asha',
    last: 'Dabgotra',
    relation: 'Friend',
    phone: '8019136727',
    email: 'email@email.com',
  },
  {
    first: 'Stephany',
    last: 'Pierce',
    relation: 'Store Manager',
    phone: '8019136727',
    email: 'email@email.com',
  },
]

for(let i = 0; i <references.length; i++) {
    let reference = references[i]
}

let tableref = document.getElementById('tableref')
references.forEach((reference, index) => {
  let refrow = document.createElement('tr')
  let number = document.createElement('td')
  let first = document.createElement('td')
  let last = document.createElement('td')
  let relation = document.createElement('td')
  let phone = document.createElement('td')
  let email = document.createElement('td')
  number.innerHTML = index + 1
  first.innerHTML = reference.first
  last.innerHTML = reference.last
  relation.innerHTML = reference.relation
  phone.innerHTML = reference.phone
  email.innerHTML = reference.email
  refrow.append(number)
  refrow.append(first)
  refrow.append(last)
  refrow.append(relation)
  refrow.append(phone)
  refrow.append(email)
  tableref.append(refrow)
  
})

        </script>
    </body>
</html>

