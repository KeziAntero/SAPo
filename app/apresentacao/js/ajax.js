
class ClientAjax {
  constructor() {
    this.xhttp = new XMLHttpRequest()
  }

  get(url,func){
    this.xhttp.open("GET", url)
    this.xhttp.send()
    this.__setFunc(func)
  }

  post(url,data,func){
    this.xhttp.open("POST", url)
    this.xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
    this.xhttp.send(this.__data(data))
    this.__setFunc(func)
  }
  __data(data){
    const list = Object.keys(data)
    var str = ''
    list.forEach((e)=>{
      str+=e+'='+data[e]+'&'
    })
    str = str.substr(0,str.length - 1 )
    return str
  }
  __setFunc(func){
    if(func != null){
      this.xhttp.onreadystatechange = ()=>{
        if(this.xhttp.readyState == 4){
          func(this.xhttp.response)
        }
      }
    }
  }
}
const clienteAjax = new ClientAjax();
