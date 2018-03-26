import React, {Component} from 'react';
import { List,SegmentedControl } from 'antd-mobile';
import {
  Link
} from 'react-router-dom';

const Item = List.Item;

class Hotjob extends Component{
  constructor(props){
    super(props);
    this.baseurl="http://localhost/uploads/";
    this.defaultkey={key_name:'软件工程师'};
    this.state= {
      data: [],
      url: "/job",
      txt: '热门职业'
    };
  }
  componentDidMount(){
    let url=this.baseurl+"wwmapi/index.php?XDEBUG_SESSION_START=netbeans-xdebug";
    let postoptions = {};
    postoptions.method = 'post';
    let formData=new FormData();
    formData.append("action","select");
    formData.append("tablename","hot_key");
    formData.append("where","`tuijian`=1 and `type`=3");
    formData.append("limit","0,16")
    postoptions.body=formData;
    fetch(url,postoptions)
    .then(response=>response.json())
    .then(json=>this.setState({...this.state,data:json}))
    .catch(e=>console.log(e));
  }
  render(){
    let {data, url, txt} = this.state;
    if(data==null || data.length==0){
      data=[];
      data.push(this.defaultkey);
    }
    return (
      <List>
        <Item extra={<Link to={url} style={styles.link}>更多&gt;&gt;</Link>}>{txt}</Item>
        <div style={styles.div}>
          {
            data.map(item=>(
              <Link to='/job' style={styles.link}>{item.key_name}</Link>
            ))
          }
        </div>
      </List>
    );
  }
}

export default Hotjob;
const styles = {
    div: {
      width: '100%',
      justifyContent:'flex-start',
      alignContent:'center',
      display: "flex",
      flexDirection:"row",
      padding: '0px 0px',
      flexWrap:'wrap',
    },
    // link:{flexGrow: 1,flexShrink: 1,height:'36px',display:'inline', lineHeight:'34px',fontSize: 12,  background: "#f8f8f8", width: '25%',border:'1px solid #cfd0d0',textAlign:'center'},
    link:{height:'36px',lineHeight:'34px',fontSize: 12,color:'#000000', background: "#f8f8f8", width: '24%',textAlign:'center'},
};