function formValidation()
{

    var uname = document.registration.name;
    var college = document.registration.college;
    var stream = document.registration.stream;
    var education = document.registration.education;
    var faculty = document.registration.faculty;
    var infrastructure = document.registration.infrastructure;
    var accomodationd = document.registration.accomodation;
    var higherEdu = document.registration.higherEdu;
    var placement = document.registration.placements;
    var clubs = document.registration.clubs;
    var overall = document.registration.overall;

if(allLetter(uname))
{
if(allLetter(college))
{
if(allLetter(stream))
{
if(number_validation(education,1,5))
{
    if(number_validation(faculty,1,5))
    {
        if(number_validation(infrastructure,1,5))
        {
            if(number_validation(accomodationd,1,5))
            {
                if(number_validation(higherEdu,1,5))
                {
                    if(number_validation(placement,1,5))
                    {
                        if(number_validation(clubs,1,5))
                        {
                            if(number_validation(overall,1,5))
                            {
}
}
}
}
}
}
}
}
}
}
return false;
}
return true;
} 


function number_validation(uid,mx,my)
{
    var uid_len = uid.value.length;
    if (uid_len >= my || uid_len <= mx)
    {
    alert("Rating should not be empty / star between "+mx+" to "+my);
    uid.focus();
    return false;
    }
    else
    { return true;}
}

function allLetter(uname)
{
    var letters = /^[A-Za-z]+$/;
    if(uname.value.match(letters))
    {
    return true;
    }
    else
    {
    alert('Field must have alphabet characters only');
    uname.focus();
    return false;
    }
}

