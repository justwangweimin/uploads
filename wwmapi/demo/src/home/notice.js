import React,{Component} from 'react';
import { NoticeBar } from 'antd-mobile';

class Notice extends Component {
  constructor(props){
    super(props);
    this.state={
      message:'通知：Css display:inline属性与float的区别 Display:inline;属性的作用就是使块级...当元素设置成为inline属性,变成行内元素以后,设置width属性也就没有效果了'
    }
  }
  render(){
    const {message}=this.state;
    return (
      <NoticeBar marqueeProps={{ loop: true, style: { padding: '0 7.5px' } }}>
        {message}
      </NoticeBar>
    );
  }
}

export default Notice;