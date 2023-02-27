// The following function is used to delete the entire given value in the search field
function resetInputBtn () {

    // collecting both input and its delete-all button
    let searchInput = document.querySelector('#search')
        resetBtn = document.querySelector('#reset-icon');
        resultList = document.querySelector('#search-results');
    
    // show and delete actions of the reset button
    const shutOff = (clickFct) => 
    {
        resetBtn.removeAttribute('style');
        resetBtn.removeEventListener('click', clickFct);
    }

    // get the search input cuurent value
    searchInput.addEventListener('input', (event) => {
        if(event.target.value.length >= 1) 
        {
            resetBtn.setAttribute('style', 'display: inline;');
            resetBtn.addEventListener('click', deleteAction);
            function deleteAction () {
                searchInput.value = '';
                shutOff(deleteAction);
                // Delete all found matches
                resultList.querySelectorAll('div').forEach ( div => {
                    resultList.removeChild(div);
                })
                // hide the result list
                resultList.style.display = 'none';
            }  
        }
        else 
        {
            shutOff(deleteAction);
        }
    })
}
// => execute
resetInputBtn ();


//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////


// The following function is used to search for the cards by the chosen motif
function searchCard () {

    // collecting all existing filters
    let roles = document.querySelectorAll('.role'),
        usernames = document.querySelectorAll('.username'),
        lastnames = document.querySelectorAll('.last'),
        firstnames = document.querySelectorAll('.first'),
        dates = document.querySelectorAll('.date'),
        search = document.querySelector('#search');
    // console.log(search, cards, roles, usernames, lastnames, firstnames, dates);


    // collecting the cards and search for identitic pairs
    const searchMatches = (entry) => {
        let foundCards = [];
        document.querySelectorAll('.user-card').forEach( card => {
                // check if the any card matches the given entry 
                if (card.contains(entry)) {
                    // fill the result list with found matches
                    foundCards.push(
                        card.querySelector('.username').textContent + " - " +
                        card.querySelector('.first').textContent + " ( " +
                        card.querySelector('.role').textContent + " ) : " +
                        card.querySelector('.date').textContent
                    );
                }
        })
        return foundCards;
    }    


    // conceive the search result list container
    let resultList = document.querySelector('#search-results');

    // get the search input current value
    var foundState = false;

    search.addEventListener('input', (event) => 
    {
        // chceck if the search input has any entries
        if(event.target.value.length > 0) {
            resultList.style.display = 'inline-block';
            // check if any user's card macth the given search input entry
            roles.forEach( role => 
            {
                if(event.target.value.toLowerCase() ===  role.textContent.toLowerCase()) 
                {
                    resultList.removeChild(resultList.children[0]); 
                    if (searchMatches(role).length > 0) {
                        searchMatches(role).forEach( found => {
                            let result = document.createElement('div');
                            result.innerText = found;
                            resultList.appendChild(result);
                        })
                        foundState = true;
                    }
                }
            })
            
        }
        else {
            resultList.style.display = 'none';
        }
    })

    // manage the result list in case there is no user was found
    // if (foundState === false) {
    //     resultList.querySelectorAll('div').forEach ( div => {
    //         resultList.removeChild(div);
    //     })  
    // }

    // manage search input when the user aborts it
    search.addEventListener('blur', (event) => {
        event.target.value = '';
        resultList.querySelectorAll('div').forEach ( div => {
            resultList.removeChild(div);
        }) 
        resultList.style.display = 'none';
    })
}
// => execute
searchCard ();