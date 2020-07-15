using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Pms
{
    #region Groups
    public class Groups
    {
        #region Member Variables
        protected int _id;
        protected string _member;
        protected string _member;
        protected string _member;
        protected string _group_username;
        protected string _group_password;
        #endregion
        #region Constructors
        public Groups() { }
        public Groups(string member, string member, string member, string group_username, string group_password)
        {
            this._member=member;
            this._member=member;
            this._member=member;
            this._group_username=group_username;
            this._group_password=group_password;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Member
        {
            get {return _member;}
            set {_member=value;}
        }
        public virtual string Member
        {
            get {return _member;}
            set {_member=value;}
        }
        public virtual string Member
        {
            get {return _member;}
            set {_member=value;}
        }
        public virtual string Group_username
        {
            get {return _group_username;}
            set {_group_username=value;}
        }
        public virtual string Group_password
        {
            get {return _group_password;}
            set {_group_password=value;}
        }
        #endregion
    }
    #endregion
}