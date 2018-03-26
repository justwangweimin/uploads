import React, {Component} from 'react';
import { Carousel} from 'antd-mobile';

class Ad extends Component{
  constructor(props){
    super(props);
    this.baseurl="http://localhost/uploads/";
    this.defaultimg={pic_src:this.baseurl,pic_url:"../data/upload/pimg/20180226/15215715002.JPG"};
    this.state= {
      data: [],
      imgHeight:'140px',
    };
  }
  componentDidMount(){
    let url=this.baseurl+"wwmapi/index.php?XDEBUG_SESSION_START=netbeans-xdebug";
    let postoptions = {};
    postoptions.method = 'post';
    let formData=new FormData();
    formData.append("action",'select');
    formData.append("tablename","ad");
    formData.append("where","`class_id`=50");
    postoptions.body=formData;
    fetch(url,postoptions)
    .then(response=>response.json())
    .then(json=>this.setState({...this.state,data:json}))
    .catch(e=>console.log(e));
  }
  render(){
    let {data,imgHeight}=this.state;
    if(data==null || data.length==0){
      data=[];
      data.push(this.defaultimg);
    }
    return (
      <Carousel
      autoplay={false}
      infinite
      selectedIndex={0}
    >
      {data.map(item => (
        <a  href={item.pic_src} key={item.pic_url}
            style={{ display: 'inline-block', width: '100%', height: imgHeight }}
        >
          <img
            src={this.baseurl+"/data/"+item.pic_url}
            alt={item.pic_url}
            style={{ maxWidth: '100%',maxHeight:imgHeight,width:'100%',height:'100%' }}
          />
        </a>
      ))}
    </Carousel>
    );
  }
}
export default Ad;