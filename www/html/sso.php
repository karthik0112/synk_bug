<?php
<script>
const ssoParams = {
  agent_code: 1000
};
const token =
  'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJuYW1lIjoiTUlBTF9JVlJfREVWX1NFQ19VU0VSIiwiaWF0IjoxNjU3MDk2MDc0fQ.mdM-MsxZa5lxpv-ygIHmX2u3AfYIBekPZVMTzsfUBHg';



async function ssoLogin() {
  try {
    const ssoLoginUrl = await fetch("https://crmdevapi.codingtown.com/v1/sso/authenticate", {
      headers: {
        'Content-Type': 'application/json',
        Authorization: `Bearer ${token}`
      },
      body: JSON.stringify(ssoParams),
      method: 'POST'
    });
    const responseBody = await ssoLoginUrl.json();
    console.log(responseBody["sso_login_url"]);
    window.location.replace(responseBody["sso_login_url"]);
    if (responseBody.errors) {
      console.log("RESPONSE ERROR", responseBody.errors);
      alert(responseBody.errors[0]);
    } else {
      // REDIRECT TO PAGE
    }
  } catch (error) {
    console.log("CATCH ERROR", error);
    alert('Sorry, Something Went Wrong..! Try again');
  }



}
ssoLogin();
</script>
?>
